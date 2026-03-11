<?php

use Context\ProgramContext;
use Context\PrintStatementContext;
use Context\VarDeclarationContext;
use Context\AssignmentStatementContext;
use Context\IfStatementContext;
use Context\WhileStatementContext;
use Context\ContinueStatementContext;
use Context\BreakStatementContext;
use Context\ReturnStatementContext;
use Context\FunctionDeclarationContext;
use Context\FunctionCallStatementContext;
use Context\ArrayAssignmentStatementContext;
use Context\BlockStatementContext;
use Context\EqualityExpressionContext;
use Context\InequalityExpressionContext;
use Context\AddExpressionContext;
use Context\ProductExpressionContext;
use Context\PrimaryExpressionContext;
use Context\UnaryExpressionContext;
use Context\GroupedExpressionContext;
use Context\IntExpressionContext;
use Context\ReferenceExpressionContext;
use Context\BoolExpressionContext;
use Context\FunctionCallExpressionContext;
use Context\ArrayExpressionContext;
use Context\ArrayAccessExpressionContext;
use Context\ParameterListContext;
use Context\ArgumentListContext;

use Context\ShortVarDeclarationContext;
use Context\StringExpressionContext;
use Context\OrExpressionContext;
use Context\AndExpressionContext;
use Context\FloatExpressionContext;
use Context\RuneExpressionContext;
use Context\ConstDeclarationContext;
use Context\IdListContext;
use Context\NilExpressionContext;
use Context\IncrementStatementContext;
use Context\ForClassicStatementContext;
use Context\SwitchStatementContext;
use Context\CaseStmtContext;
use Context\DefaultStmtContext;
use Context\InfiniteForStatementContext;
use Context\ArrayInitExpression;
use Context\MatrixInitExpression;
use Context\ParamDeclContext;

use Context\ReferenceValueExpressionContext;
use Context\ReferenceArrayExpressionContext;
use Context\SliceInitExpressionContext;



class Interpreter extends GrammarBaseVisitor
{
    public $console;
    public $env;

    public $embebed;

    public $errors;
    public $symbols;

    public $scopeStack;
    public $currentFunction;

    public function __construct()
    {
        $this->console = "";
        $this->env = new Environment();
        $this->embebed = include __DIR__ . "/Natives.php";
        $this->errors = [];
        $this->symbols = [];

        $this->scopeStack = ["global"];
        $this->currentFunction = null;

        foreach ($this->embebed as $name => $function) {
            $this->env->set($name, $function);
        }
    }

    public function visitProgram(ProgramContext $ctx)
    {
        foreach ($ctx->stmt() as $stmt) {
            $this->visit($stmt);
        }

        try {
            $mainFunc = $this->env->get("main");
            if ($mainFunc instanceof Invocable) {
                $mainFunc->invoke($this, []);
            }
        } catch (Exception $e) {
            // si no existe main, no hace nada
        }

        return $this->console;
    }

    public function visitPrintStatement(PrintStatementContext $ctx)
    {
        $values = [];

        if ($ctx->args() !== null) {
            $values = $this->visit($ctx->args());
        }

        $output = [];

        foreach ($values as $value) {

            if ($value === null) {
                $value = "<nil>";
            }

            if (is_bool($value)) {
                $value = $value ? "true" : "false";
            }

            $output[] = $value;
        }

        $line = implode(" ", $output);
        $this->console .= $line . "\n";

        return $line;
    }

    public function visitVarDeclaration(VarDeclarationContext $ctx)
    {
        $ids = [];
        foreach ($ctx->idList()->ID() as $idToken) {
            $ids[] = $idToken->getText();
        }

        $typeName = $ctx->type() !== null ? $ctx->type()->getText() : $ctx->arrayType()->getText();
        $values = [];

        if ($ctx->arrayType() !== null) {
            $dimensions = [];
            preg_match_all('/\[(\d+)\]/', $ctx->arrayType()->getText(), $matches);
            foreach ($matches[1] as $size) {
                $dimensions[] = intval($size);
            }

            $baseType = preg_replace('/(\[\d+\])+/', '', $ctx->arrayType()->getText());

            $buildArray = function ($dims, $baseType) use (&$buildArray) {
                $size = array_shift($dims);

                $defaultValue = match ($baseType) {
                    'int32' => 0,
                    'float32' => 0.0,
                    'bool' => false,
                    'rune' => 0,
                    'string' => "",
                    default => null
                };

                $result = [];
                for ($i = 0; $i < $size; $i++) {
                    $result[] = count($dims) > 0 ? $buildArray($dims, $baseType) : $defaultValue;
                }
                return $result;
            };

            $values = [];
            foreach ($ids as $unused) {
                $values[] = $buildArray($dimensions, $baseType);
            }
        }

        if ($ctx->args() !== null) {
            $values = $this->visit($ctx->args());
        } else {
            $values = [];

            if ($ctx->arrayType() !== null) {
                $dimensions = [];
                preg_match_all('/\[(\d+)\]/', $ctx->arrayType()->getText(), $matches);
                foreach ($matches[1] as $size) {
                    $dimensions[] = intval($size);
                }

                $baseType = preg_replace('/(\[\d+\])+/', '', $ctx->arrayType()->getText());

                $buildArray = function ($dims, $baseType) use (&$buildArray) {
                    $size = array_shift($dims);

                    $defaultValue = match ($baseType) {
                        'int32' => 0,
                        'float32' => 0.0,
                        'bool' => false,
                        'rune' => 0,
                        'string' => "",
                        default => null
                    };

                    $result = [];
                    for ($i = 0; $i < $size; $i++) {
                        $result[] = count($dims) > 0 ? $buildArray($dims, $baseType) : $defaultValue;
                    }
                    return $result;
                };

                foreach ($ids as $unused) {
                    $values[] = $buildArray($dimensions, $baseType);
                }
            } else {
                foreach ($ids as $unused) {
                    switch ($typeName) {
                        case 'int32':
                            $values[] = 0;
                            break;
                        case 'float32':
                            $values[] = 0.0;
                            break;
                        case 'bool':
                            $values[] = false;
                            break;
                        case 'rune':
                            $values[] = 0;
                            break;
                        case 'string':
                            $values[] = "";
                            break;
                        default:
                            $values[] = null;
                    }
                }
            }
        }
        if (count($ids) !== count($values)) {
            $this->addError("Semántico", "La cantidad de variables y valores no coincide en declaración múltiple.", $ctx);
            throw new Exception("La cantidad de variables y valores no coincide en declaración múltiple.");
        }

        foreach ($ids as $i => $varName) {
            $value = $values[$i];
            $this->env->set($varName, $value);

            $this->addSymbol($varName, $typeName, $value, $ctx);
        }

        return null;
    }

    public function visitShortVarDeclaration(ShortVarDeclarationContext $ctx)
    {
        $ids = [];
        foreach ($ctx->idList()->ID() as $idToken) {
            $ids[] = $idToken->getText();
        }

        $values = $this->visit($ctx->args());

        if (count($ids) > 1 && count($values) === 1 && is_array($values[0])) {
            $values = $values[0];
        }

        if (count($ids) !== count($values)) {
            $this->addError("Semántico", "La cantidad de variables y valores no coincide en declaración corta múltiple.", $ctx);
            throw new Exception("La cantidad de variables y valores no coincide en declaración corta múltiple.");
        }

        foreach ($ids as $i => $varName) {
            $value = $values[$i];
            $this->env->set($varName, $value);

            $tipo = match (gettype($value)) {
                'integer' => 'int32',
                'double' => 'float32',
                'boolean' => 'bool',
                'string' => 'string',
                'array' => 'array',
                'NULL' => 'nil',
                default => gettype($value)
            };

            $this->addSymbol($varName, $tipo, $value, $ctx);
        }

        return null;
    }

    public function visitAssignmentStatement(AssignmentStatementContext $ctx)
    {
        $varName = $ctx->ID()->getText();
        $op = $ctx->op->getText();
        $value = $this->visit($ctx->e());

        if ($op === '=') {
            $this->env->assign($varName, $value);
            return $value;
        }

        $current = $this->env->get($varName);

        switch ($op) {
            case '+=':
                $result = $current + $value;
                break;
            case '-=':
                $result = $current - $value;
                break;
            case '*=':
                $result = $current * $value;
                break;
            case '/=':
                $result = $current / $value;
                break;
            default:
                $this->addError("Semántico", "Operador de asignación desconocido: " . $op, $ctx);
                throw new Exception("Operador de asignación desconocido: " . $op);
        }

        $this->env->assign($varName, $result);
        return $result;
    }

    public function visitIfStatement(IfStatementContext $ctx)
    {
        $condition = $this->visit($ctx->e());

        if ($condition) {
            $flow = $this->visit($ctx->block());
            if ($flow instanceof FlowType) {
                return $flow;
            }
        } else if ($ctx->elseStmt() !== null) {
            $flow = $this->visit($ctx->elseStmt());
            if ($flow instanceof FlowType) {
                return $flow;
            }
        }

        return null;
    }

    public function visitWhileStatement(WhileStatementContext $ctx)
    {
        do {
            $condition = $this->visit($ctx->e());
            if ($condition) {
                $flow = $this->visit($ctx->block());
                if ($flow instanceof BreakType) {
                    break;
                }
            }
        } while ($condition);
    }

    public function visitContinueStatement(ContinueStatementContext $ctx)
    {
        return new ContinueType();
    }

    public function visitBreakStatement(BreakStatementContext $ctx)
    {
        return new BreakType();
    }

    public function visitFunctionDeclaration(FunctionDeclarationContext $ctx)
    {
        $params = [];
        if ($ctx->params() !== null) {
            $params = $this->visit($ctx->params());
        }

        $functionName = $ctx->ID()->getText();

        $function = new Foreign($ctx, $this->env, $params);
        $this->env->set($functionName, $function);

        // registrar función en tabla de símbolos
        $this->addSymbol($functionName, "funcion", null, $ctx);
    }

    public function visitFunctionCallStatement(FunctionCallStatementContext $ctx)
    {
        $function = $this->env->get($ctx->ID()->getText());
        $args = array();

        if ($ctx->args() !== null) {
            $args = $this->visit($ctx->args());
        }

        if (!($function instanceof Invocable)) {
            $this->addError("Semántico", "La variable " . $ctx->ID()->getText() . " no es una función invocable", $ctx);
            throw new Exception("La variable " . $ctx->ID()->getText() . " no es una función invocable");
        }

        if ($function->get_arity() !== count($args)) {
            $this->addError(
                "Semántico",
                "La función " . $ctx->ID()->getText() . " espera " . $function->get_arity() . " argumentos, pero se le dieron " . count($args),
                $ctx
            );
            throw new Exception("La función " . $ctx->ID()->getText() . " espera " . $function->get_arity() . " argumentos, pero se le dieron " . count($args));
        }

        return $function->invoke($this, $args);
    }

    public function visitArrayAssignmentStatement(ArrayAssignmentStatementContext $ctx)
    {
        $arrayName = $ctx->ID()->getText();
        $array = &$this->env->get_ref($arrayName);

        if (!is_array($array)) {
            $this->addError("Semántico", "La variable " . $arrayName . " no es un arreglo", $ctx);
            throw new Exception("La variable " . $arrayName . " no es un arreglo");
        }

        $indices = array();
        foreach ($ctx->index as $index) {
            $idx = $this->visit($index);

            if (!is_int($idx)) {
                $this->addError("Semántico", "El índice debe ser un entero, se recibió: " . gettype($idx), $ctx);
                throw new Exception("El índice debe ser un entero, se recibió: " . gettype($idx));
            }

            $indices[] = $idx;
        }

        $value = $this->visit($ctx->assign);

        $current = &$array;
        for ($i = 0; $i < count($indices) - 1; $i++) {
            $idx = $indices[$i];

            if (!array_key_exists($idx, $current)) {
                $this->addError("Semántico", "Índice fuera de rango: " . $idx, $ctx);
                throw new Exception("Índice fuera de rango: " . $idx);
            }

            if (!is_array($current[$idx])) {
                $this->addError("Semántico", "El elemento en el índice " . $idx . " no es un arreglo", $ctx);
                throw new Exception("El elemento en el índice " . $idx . " no es un arreglo");
            }

            $current = &$current[$idx];
        }

        $finalIdx = end($indices);
        if (!array_key_exists($finalIdx, $current)) {
            $this->addError("Semántico", "Índice fuera de rango: " . $finalIdx, $ctx);
            throw new Exception("Índice fuera de rango: " . $finalIdx);
        }

        $current[$finalIdx] = $value;
    }

    public function visitBlockStatement(BlockStatementContext $ctx)
    {
        $prevEnv = $this->env;
        $this->env = new Environment($prevEnv);

        $this->pushScope("bloque");

        foreach ($ctx->stmt() as $stmt) {
            $flow = $this->visit($stmt);
            if ($flow instanceof FlowType) {
                $this->popScope();
                $this->env = $prevEnv;
                return $flow;
            }
        }

        $this->popScope();
        $this->env = $prevEnv;
    }

    public function visitEqualityExpression(EqualityExpressionContext $ctx)
    {
        if ($ctx->right !== null) {
            $left = $this->visit($ctx->left);
            $right = $this->visit($ctx->right);

            if ($left === null || $right === null) {
                return null;
            }

            return $left == $right;
        } else {
            return $this->visit($ctx->left);
        }
    }

    public function visitInequalityExpression(InequalityExpressionContext $ctx)
    {
        if ($ctx->right !== null) {
            $left = $this->visit($ctx->left);
            $right = $this->visit($ctx->right);
            $op = $ctx->op->getText();

            switch ($op) {
                case '>':
                    return $left > $right;
                case '<':
                    return $left < $right;
                case '>=':
                    return $left >= $right;
                case '<=':
                    return $left <= $right;
                case '!=':
                    return $left != $right;
                default:
                    throw new Exception("Operador desconocido: " . $op);
            }
        } else {
            return $this->visit($ctx->left);
        }
    }

    public function visitAddExpression(AddExpressionContext $ctx)
    {
        if ($ctx->add() !== null) {
            $add = $this->visit($ctx->add());
            $prod = $this->visit($ctx->prod());
            $op = $ctx->op->getText();

            switch ($op) {
                case '+':
                    return $add + $prod;
                case '-':
                    return $add - $prod;
                default:
                    throw new Exception("Operador desconocido: " . $op);
            }
        } else {
            return $this->visit($ctx->prod());
        }
    }

    public function visitProductExpression(ProductExpressionContext $ctx)
    {
        if ($ctx->prod() !== null) {
            $prod = $this->visit($ctx->prod());
            $unary = $this->visit($ctx->unary());
            $op = $ctx->op->getText();

            switch ($op) {
                case '*':
                    return $prod * $unary;
                case '/':
                    if (is_int($prod) && is_int($unary)) {
                        return intdiv($prod, $unary);
                    }
                    return $prod / $unary;
                case '%':
                    return $prod % $unary;
                default:
                    throw new Exception("Operador desconocido: " . $op);
            }
        } else {
            return $this->visit($ctx->unary());
        }
    }
    public function visitPrimaryExpression(PrimaryExpressionContext $ctx)
    {
        return $this->visit($ctx->primary());
    }

    public function visitUnaryExpression(UnaryExpressionContext $ctx)
    {
        $value = $this->visit($ctx->unary());
        $op = $ctx->getChild(0)->getText();

        if ($op === '-') {
            return -$value;
        }

        if ($op === '!') {
            return !$value;
        }

        throw new Exception("Operador unario desconocido: " . $op);
    }

    public function visitGroupedExpression(GroupedExpressionContext $ctx)
    {
        return $this->visit($ctx->e());
    }

    public function visitIntExpression(IntExpressionContext $ctx)
    {
        return intval($ctx->INT()->getText());
    }

    public function visitReferenceExpression(ReferenceExpressionContext $ctx)
    {
        $varName = $ctx->ID()->getText();

        try {
            return $this->env->get($varName);
        } catch (Exception $e) {
            $this->addError("Semántico", "Variable no declarada: " . $varName, $ctx);
            throw new Exception("Variable no declarada: " . $varName);
        }
    }

    public function visitBoolExpression(BoolExpressionContext $ctx)
    {
        return $ctx->bool->getText() === 'true';
    }

    public function visitFunctionCallExpression(FunctionCallExpressionContext $ctx)
    {
        $function = $this->env->get($ctx->ID()->getText());
        $args = array();

        if ($ctx->args() !== null) {
            $args = $this->visit($ctx->args());
        }

        if (!($function instanceof Invocable)) {
            $this->addError("Semántico", "La expresión no es una función invocable", $ctx);
            throw new Exception("La expresión no es una función invocable");
        }

        if ($function->get_arity() !== count($args)) {
            $this->addError(
                "Semántico",
                "La función espera " . $function->get_arity() . " argumentos, pero se le dieron " . count($args),
                $ctx
            );
            throw new Exception("La función espera " . $function->get_arity() . " argumentos, pero se le dieron " . count($args));
        }

        return $function->invoke($this, $args);
    }

    public function visitArrayExpression(ArrayExpressionContext $ctx)
    {
        $elements = array();
        foreach ($ctx->e() as $element) {
            $elements[] = $this->visit($element);
        }
        return $elements;
    }

    public function visitArrayAccessExpression(ArrayAccessExpressionContext $ctx)
    {
        $array = $this->env->get($ctx->ID()->getText());

        foreach ($ctx->e() as $index) {
            $idx = $this->visit($index);

            if (!is_array($array)) {
                $this->addError("Semántico", "La variable " . $ctx->ID()->getText() . " no es un arreglo", $ctx);
                throw new Exception("La variable " . $ctx->ID()->getText() . " no es un arreglo");
            }

            if (!array_key_exists($idx, $array)) {
                $this->addError("Semántico", "Índice fuera de rango: " . $idx, $ctx);
                throw new Exception("Índice fuera de rango: " . $idx);
            }

            $array = $array[$idx];
        }

        return $array;
    }


    public function visitArgumentList(ArgumentListContext $ctx)
    {
        $args = array();
        foreach ($ctx->e() as $arg) {
            $args[] = $this->visit($arg);
        }
        return $args;
    }

    public function visitStringExpression(StringExpressionContext $ctx)
    {
        $text = $ctx->getText();
        $text = substr($text, 1, -1); // quitar comillas

        $text = str_replace("\\n", "\n", $text);
        $text = str_replace("\\t", "\t", $text);
        $text = str_replace("\\r", "\r", $text);
        $text = str_replace('\\"', '"', $text);
        $text = str_replace("\\\\", "\\", $text);

        return $text;
    }

    public function visitOrExpression(OrExpressionContext $ctx)
    {
        if ($ctx->getChildCount() === 1) {
            return $this->visit($ctx->getChild(0));
        }

        $left = $this->visit($ctx->getChild(0));
        if ($left) {
            return true;
        }

        return $this->visit($ctx->getChild(2));
    }

    public function visitAndExpression(AndExpressionContext $ctx)
    {
        if ($ctx->getChildCount() === 1) {
            return $this->visit($ctx->getChild(0));
        }

        $left = $this->visit($ctx->getChild(0));
        if (!$left) {
            return false;
        }

        return $this->visit($ctx->getChild(2));
    }

    public function visitFloatExpression(FloatExpressionContext $ctx)
    {
        return floatval($ctx->getText());
    }

    public function visitRuneExpression(RuneExpressionContext $ctx)
    {
        $text = $ctx->getText();
        $char = substr($text, 1, -1);
        return ord($char);
    }

    public function visitConstDeclaration(ConstDeclarationContext $ctx)
    {
        $varName = $ctx->ID()->getText();
        $typeName = $ctx->type()->getText();
        $value = $this->visit($ctx->e());

        $this->env->set($varName, $value);

        $this->addSymbol($varName, $typeName, $value, $ctx);

        return $value;
    }

    public function visitNilExpression(NilExpressionContext $ctx)
    {
        return null;
    }

    public function visitIncrementStatement(IncrementStatementContext $ctx)
    {
        $varName = $ctx->ID()->getText();
        $current = $this->env->get($varName);
        $result = $current + 1;
        $this->env->assign($varName, $result);
        return $result;
    }

    public function visitForClassicStatement(ForClassicStatementContext $ctx)
    {
        $prevEnv = $this->env;
        $this->env = new Environment($prevEnv);

        $init = $ctx->getChild(1);
        $cond = $ctx->getChild(3);
        $update = $ctx->getChild(5);
        $block = $ctx->getChild(6);

        $this->visit($init);

        while ($this->visit($cond)) {
            $flow = $this->visit($block);

            if ($flow instanceof BreakType) {
                break;
            }

            if ($flow instanceof ReturnType) {
                $this->env = $prevEnv;
                return $flow;
            }

            $this->visit($update);
        }

        $this->env = $prevEnv;
        return null;
    }
    public function visitSwitchStatement(SwitchStatementContext $ctx)
    {
        $switchNode = $ctx->switchStmt();
        $switchValue = $this->visit($switchNode->e());

        foreach ($switchNode->caseStmt() as $case) {
            $caseValue = $this->visit($case->e());

            if ($switchValue == $caseValue) {
                foreach ($case->stmt() as $stmt) {
                    $flow = $this->visit($stmt);

                    if ($flow instanceof BreakType) {
                        return null;
                    }

                    if ($flow instanceof FlowType) {
                        return $flow;
                    }
                }
                return null;
            }
        }

        if ($switchNode->defaultStmt() !== null) {
            foreach ($switchNode->defaultStmt()->stmt() as $stmt) {
                $flow = $this->visit($stmt);

                if ($flow instanceof BreakType) {
                    return null;
                }

                if ($flow instanceof FlowType) {
                    return $flow;
                }
            }
        }

        return null;
    }

    public function visitInfiniteForStatement(InfiniteForStatementContext $ctx)
    {
        while (true) {
            $flow = $this->visit($ctx->block());

            if ($flow instanceof BreakType) {
                break;
            }

            if ($flow instanceof ReturnType) {
                return $flow;
            }
        }

        return null;
    }

    public function visitArrayInitExpression($ctx)
    {
        $values = [];

        foreach ($ctx->e() as $expr) {
            $values[] = $this->visit($expr);
        }

        return $values;
    }

    public function visitMatrixInitExpression($ctx)
    {
        $matrix = [];

        foreach ($ctx->arrayRow() as $rowCtx) {

            $row = [];

            foreach ($rowCtx->e() as $expr) {
                $row[] = $this->visit($expr);
            }

            $matrix[] = $row;
        }

        return $matrix;
    }

    public function visitParameterList(ParameterListContext $ctx)
    {
        $result = [];
        foreach ($ctx->param() as $p) {
            $result[] = $this->visit($p);
        }
        return $result;
    }

    public function visitParamDecl(ParamDeclContext $ctx)
    {
        return $ctx->ID()->getText();
    }

    public function visitReturnStatement(ReturnStatementContext $ctx)
    {
        if ($ctx->args() === null) {
            return new ReturnType(null);
        }

        $values = $this->visit($ctx->args());

        if (count($values) === 1) {
            return new ReturnType($values[0]);
        }

        return new ReturnType($values);
    }

    public function visitReferenceValueExpression(ReferenceValueExpressionContext $ctx)
    {
        return ['__ref__' => true, 'name' => $ctx->ID()->getText()];
    }

    public function visitReferenceArrayExpression(ReferenceArrayExpressionContext $ctx)
    {
        return ['__ref__' => true, 'name' => $ctx->ID()->getText()];
    }

    public function visitSliceInitExpression(SliceInitExpressionContext $ctx)
    {
        $values = [];
        foreach ($ctx->e() as $expr) {
            $values[] = $this->visit($expr);
        }
        return $values;
    }

    private function getCurrentScope()
    {
        return end($this->scopeStack);
    }

    private function pushScope($name)
    {
        $this->scopeStack[] = $name;
    }

    private function popScope()
    {
        array_pop($this->scopeStack);
    }

    private function addSymbol($id, $tipo, $valor, $ctx)
    {
        $line = null;
        $column = null;

        if ($ctx !== null && method_exists($ctx, 'getStart')) {
            $start = $ctx->getStart();
            if ($start !== null) {
                $line = $start->getLine();
                $column = $start->getCharPositionInLine();
            }
        }

        $this->symbols[] = [
            "id" => $id,
            "tipo" => $tipo,
            "ambito" => $this->getCurrentScope(),
            "valor" => is_array($valor) ? json_encode($valor) : $valor,
            "linea" => $line,
            "columna" => $column
        ];
    }

    public function addError($tipo, $descripcion, $ctx = null)
    {
        $line = null;
        $column = null;

        if ($ctx !== null && method_exists($ctx, 'getStart')) {
            $start = $ctx->getStart();
            if ($start !== null) {
                $line = $start->getLine();
                $column = $start->getCharPositionInLine();
            }
        }

        $this->errors[] = [
            "tipo" => $tipo,
            "descripcion" => $descripcion,
            "linea" => $line,
            "columna" => $column
        ];
    }
}