<?php

class Foreign extends Invocable {
    public $ctx;
    public $closure;
    public $params;
    public function __construct($ctx, $closure, $params) {
        $this->ctx = $ctx;
        $this->closure = $closure;
        $this->params = $params;
    }
    public function get_arity() {
        return count($this->params);
    }
public function invoke($interpreter, $args) {
    $previousEnv = $interpreter->env;
    $interpreter->env = new Environment($this->closure);

    foreach ($this->params as $i => $paramName) {
        $arg = $args[$i] ?? null;

        if (is_array($arg) && isset($arg['__ref__']) && $arg['__ref__'] === true) {
            $refName = $arg['name'];
            $refValue = &$previousEnv->get_ref($refName);
            $interpreter->env->set_ref($paramName, $refValue);
        } else {
            $interpreter->env->set($paramName, $arg);
        }
    }

    $result = $interpreter->visit($this->ctx->block());

    $interpreter->env = $previousEnv;

    if ($result instanceof ReturnType) {
        return $result->value;
    }

    return null;
}
}