<?php
require_once "./bootstrap.php";

use Antlr\Antlr4\Runtime\Error\Listeners\BaseErrorListener;
use Antlr\Antlr4\Runtime\Recognizer;
use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;

class SyntaxErrorCollector extends BaseErrorListener
{
    public array $errors = [];

    public function syntaxError(
        Recognizer $recognizer,
        ?object $offendingSymbol,
        int $line,
        int $charPositionInLine,
        string $msg,
        ?RecognitionException $exception,
    ): void {
        $this->errors[] = [
            "tipo" => "Sintáctico",
            "descripcion" => $msg,
            "linea" => $line,
            "columna" => $charPositionInLine
        ];
    }
}

$code = $_POST["code"] ?? "";
$output = "";

$errors = [];
$symbols = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $input = \Antlr\Antlr4\Runtime\InputStream::fromString($code);
        $lexer = new GrammarLexer($input);
        $tokens = new \Antlr\Antlr4\Runtime\CommonTokenStream($lexer);

        $parser = new GrammarParser($tokens);

        $errorListener = new SyntaxErrorCollector();
        $parser->removeErrorListeners();
        $parser->addErrorListener($errorListener);

        $tree = $parser->p();

        if (count($errorListener->errors) > 0) {
            $errors = $errorListener->errors;

            $output = "=== ERRORES ENCONTRADOS ===\n\n";
            foreach ($errors as $i => $err) {
                $num = $i + 1;
                $output .= "[Error {$num}] {$err['tipo']}: {$err['descripcion']}\n";
                $output .= "Línea: {$err['linea']} | Columna: {$err['columna']}\n\n";
            }
        } else {
            $interpreter = new Interpreter();
            $result = $interpreter->visit($tree);

            $errors = $interpreter->errors;
            $symbols = $interpreter->symbols;

            if (!empty($errors)) {
                $output = "=== ERRORES ENCONTRADOS ===\n\n";
                foreach ($errors as $i => $err) {
                    $num = $i + 1;
                    $tipo = $err["tipo"] ?? "Semántico";
                    $desc = $err["descripcion"] ?? "Error no especificado";
                    $linea = $err["linea"] ?? "-";
                    $columna = $err["columna"] ?? "-";

                    $output .= "[Error {$num}] {$tipo}: {$desc}\n";
                    $output .= "Línea: {$linea} | Columna: {$columna}\n\n";
                }
            } else {
                $output = $result;
            }
        }
    } catch (Throwable $e) {
        $errors[] = [
            "tipo" => "Semántico",
            "descripcion" => $e->getMessage(),
            "linea" => "-",
            "columna" => "-"
        ];

        $output = "=== ERRORES ENCONTRADOS ===\n\n";
        $output .= "[Error 1] Semántico: " . $e->getMessage() . "\n";
        $output .= "Línea: - | Columna: -\n\n";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golampi Interpreter</title>
    <link rel="stylesheet" href="./static/style.css">
</head>

<body>
    <div class="app-shell">
        <header class="topbar">
            <div>
                <h1>Golampi Interpreter</h1>
                <p>Editor, ejecución y reportes</p>
            </div>
            <div class="topbar-badge">OLC2 · Proyecto 1</div>
        </header>

        <form id="runForm" method="POST" class="workspace">
            <section class="action-bar card">
                <div class="action-group">
                    <button type="button" id="btnNew" class="btn secondary">Nuevo / Limpiar</button>
                    <label for="fileInput" class="btn secondary">Cargar archivo</label>
                    <input type="file" id="fileInput" accept=".go,.txt">
                    <button type="button" id="btnSave" class="btn secondary">Guardar código</button>
                </div>

                <div class="action-group">
                    <button type="submit" id="btnRun" class="btn primary">Ejecutar</button>
                    <button type="button" id="btnClearConsole" class="btn secondary">Limpiar consola</button>
                </div>
            </section>

            <div class="main-grid">
                <section class="editor-panel card">
                    <div class="panel-header">
                        <h2>Editor de código</h2>
                    </div>
                    <div class="editor-wrapper">
                        <div id="editorLines" class="editor-lines"></div>
                        <textarea id="code" name="code" class="editor" spellcheck="false"
                            placeholder="Escribe aquí tu código Golampi..."><?= htmlspecialchars($code) ?></textarea>
                    </div>
                </section>

                <aside class="reports-panel card">
                    <div class="panel-header">
                        <h2>Reportes</h2>
                    </div>

                    <div class="report-buttons">
                        <button type="button" id="btnDownloadOutput" class="btn secondary">Descargar resultado</button>
                        <button type="button" id="btnDownloadErrors" class="btn secondary">Descargar errores</button>
                        <button type="button" id="btnDownloadSymbols" class="btn secondary">Descargar tabla de
                            símbolos</button>
                    </div>
                    <div class="report-note">
                        <strong>Estado:</strong>
                        <p>
                            Los reportes disponibles se generan a partir del análisis y ejecución del código:
                            salida en consola, lista de errores y tabla de símbolos.
                        </p>
                    </div>
                </aside>
            </div>

            <section class="console-panel card">
                <div class="panel-header">
                    <h2>Consola de salida</h2>
                </div>

                <div class="console-wrapper">
                    <div id="consoleLines" class="console-lines"></div>
                    <pre id="console" class="console-output"><?= htmlspecialchars($output) ?></pre>
                </div>
            </section>
        </form>
    </div>

    <script>
        window.__OUTPUT__ = <?= json_encode($output) ?>;
        window.__ERRORS__ = <?= json_encode($errors) ?>;
        window.__SYMBOLS__ = <?= json_encode($symbols) ?>;
    </script>
    <script src="./static/script.js"></script>
</body>

</html>