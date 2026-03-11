# Manual Técnico
## Golampi Interpreter

**Curso:** Organización de Lenguajes y Compiladores 2  
**Proyecto:** Proyecto 1 – Intérprete Golampi  
**Autor:** Randall García

---

## 1. Objetivo del sistema

El proyecto implementa un intérprete del lenguaje Golampi con arquitectura web monolítica. El sistema recibe código fuente desde una interfaz HTML, realiza análisis léxico, sintáctico y semántico mediante ANTLR4 y ejecuta el árbol sintáctico usando el patrón Visitor en PHP.

Su propósito principal es permitir el procesamiento de un lenguaje inspirado en Go, integrando GUI, consola, manejo de errores y generación de reportes.

---

## 2. Tecnologías utilizadas

- **Lenguaje de implementación:** PHP
- **Generador de parser:** ANTLR4
- **Runtime del parser:** antlr4-php-runtime
- **Frontend:** HTML, CSS y JavaScript
- **Servidor de desarrollo:** servidor embebido de PHP
- **Gestor de dependencias:** Composer

---

## 3. Arquitectura general

La solución sigue una arquitectura web integrada.

### 3.1 Flujo general

1. El usuario escribe o carga código en la interfaz.
2. `index.php` recibe el contenido mediante POST.
3. Se crea un `InputStream` con el código fuente.
4. `GrammarLexer` tokeniza la entrada.
5. `GrammarParser` construye el árbol sintáctico a partir de la regla inicial `p`.
6. Un listener personalizado captura errores sintácticos.
7. Si no hay errores de sintaxis, `Interpreter` visita el árbol y ejecuta el programa.
8. El sistema retorna salida, errores y tabla de símbolos.
9. JavaScript presenta la salida en la consola visual y permite descargar reportes.

---

## 4. Estructura del proyecto

```text
Golampi/
├── ANTLRv4/
│   ├── GrammarLexer.php
│   ├── GrammarParser.php
│   ├── GrammarVisitor.php
│   └── GrammarBaseVisitor.php
├── src/
│   ├── Environment.php
│   ├── FlowTypes.php
│   ├── Foreigns.php
│   ├── Interpreter.php
│   ├── Invocable.php
│   └── Natives.php
├── static/
│   ├── style.css
│   └── script.js
├── documents/
│   └── manual_usuario.md
├── bootstrap.php
├── composer.json
├── Grammar.g4
├── index.php
└── README.md
```

---

## 5. Componentes principales

### 5.1 `Grammar.g4`
Define la gramática del lenguaje Golampi. La regla inicial es:

```antlr
p: stmt* EOF # Program;
```

El archivo contiene reglas para:

- sentencias
- bloques
- switch/case/default
- tipos
- arreglos
- expresiones con precedencia
- parámetros y argumentos
- reglas léxicas

### 5.2 `bootstrap.php`
Carga:

- autoload de Composer
- clases generadas por ANTLR4
- clases del runtime del intérprete

Esto centraliza las inclusiones necesarias para `index.php`.

### 5.3 `index.php`
Es el punto de entrada del sistema web. Sus responsabilidades son:

- recibir el código fuente
- ejecutar lexer y parser
- registrar errores sintácticos con `SyntaxErrorCollector`
- invocar al intérprete si el análisis sintáctico es válido
- enviar al frontend la salida, errores y símbolos mediante variables JavaScript globales

### 5.4 `Interpreter.php`
Es el núcleo semántico y de ejecución del proyecto. Extiende `GrammarBaseVisitor` e implementa la lógica de cada producción relevante del lenguaje.

Además administra:

- consola de salida
- entorno actual
- tabla de símbolos
- lista de errores
- pila de ámbitos

### 5.5 `Environment.php`
Maneja el almacenamiento y recuperación de símbolos. Mantiene el encadenamiento de entornos para simular alcance léxico. También incluye soporte por referencia para parámetros pasados con `&`.

### 5.6 `Foreigns.php`
Define la clase `Foreign`, encargada de representar funciones declaradas por el usuario. Implementa:

- almacenamiento del contexto de la función
- cierre léxico (`closure`)
- lista de parámetros
- ejecución de funciones mediante `invoke()`

### 5.7 `Invocable.php`
Sirve como contrato base para todo elemento invocable, como funciones embebidas y funciones declaradas por el usuario.

### 5.8 `Natives.php`
Registra funciones embebidas del sistema:

- `now`
- `len`
- `typeOf`
- `substr`

### 5.9 `FlowTypes.php`
Modela control de flujo especial dentro del visitor:

- `BreakType`
- `ContinueType`
- `ReturnType`

Estas clases permiten propagar interrupciones desde bloques internos hasta estructuras como `for`, `switch` y funciones.

### 5.10 `static/script.js`
Administra:

- carga de archivos
- guardado de código
- descarga de reportes
- renderizado de líneas del editor
- renderizado de líneas en consola
- atajo `Ctrl + Enter`

### 5.11 `static/style.css`
Define el estilo visual de la interfaz, incluyendo editor, consola, paneles y numeración de líneas.

---

## 6. Gramática y lenguaje soportado

### 6.1 Sentencias soportadas

- impresión con `print` y `fmt.Println`
- declaración de variables con `var`
- declaración de constantes con `const`
- declaración corta con `:=`
- asignación simple y compuesta
- incremento con `++`
- `if`
- `for` clásico
- `for` condicional
- `for` infinito
- `switch`
- `continue`
- `break`
- `return`
- declaración de funciones
- llamada de funciones
- asignación sobre arreglos

### 6.2 Expresiones soportadas

- enteros
- flotantes
- cadenas
- runes
- booleanos
- `nil`
- llamadas a función
- arreglos literales
- acceso indexado
- referencia con `&`
- inicialización de slices y matrices

### 6.3 Tipos soportados

- `int32`
- `float32`
- `bool`
- `rune`
- `string`
- punteros a tipos
- slices `[]type`
- arreglos de tamaño fijo `[n]type`

---

## 7. Visitor y ejecución semántica

El intérprete se basa en el patrón Visitor. Cada regla importante tiene un método `visit...` encargado de evaluar o ejecutar su contexto.

### 7.1 Registro de funciones y ejecución de `main`
En `visitProgram()` se recorren las sentencias del programa y luego se intenta invocar `main` si fue registrada en el entorno.

### 7.2 Variables y constantes
Los métodos `visitVarDeclaration()`, `visitShortVarDeclaration()` y `visitConstDeclaration()` insertan símbolos en el entorno y en la tabla de símbolos.

### 7.3 Expresiones
Las expresiones se resuelven por niveles de precedencia:

- `logic`
- `andExpr`
- `eq`
- `ineq`
- `add`
- `prod`
- `unary`
- `primary`

### 7.4 Cortocircuito
Se implementa en:

- `visitOrExpression()`
- `visitAndExpression()`

Esto evita evaluar la segunda expresión cuando el resultado ya está determinado.

### 7.5 Arreglos
El intérprete soporta:

- construcción de arreglos
- lectura indexada
- asignación indexada
- inicialización de matrices

### 7.6 Control de flujo
Se implementa con objetos especiales derivados de `FlowType`, lo que permite propagar `break`, `continue` y `return` correctamente.

---

## 8. Manejo de ámbitos

El intérprete usa dos mecanismos complementarios:

### 8.1 Entornos encadenados
Cada bloque o función crea un nuevo `Environment` enlazado al entorno padre.

### 8.2 Pila de ámbitos
En `Interpreter.php` existe `scopeStack`, utilizada para registrar el ámbito actual en la tabla de símbolos.

Métodos asociados:

- `getCurrentScope()`
- `pushScope($name)`
- `popScope()`

---

## 9. Tabla de símbolos

La tabla de símbolos se almacena en `Interpreter::$symbols`. Cada registro contiene:

- `id`
- `tipo`
- `ambito`
- `valor`
- `linea`
- `columna`

Los símbolos se registran con `addSymbol()`.

Ejemplo de estructura:

```json
{
  "id": "main",
  "tipo": "funcion",
  "ambito": "global",
  "valor": null,
  "linea": 1,
  "columna": 0
}
```

---

## 10. Manejo de errores

### 10.1 Errores sintácticos
En `index.php` se define `SyntaxErrorCollector`, una clase que extiende `BaseErrorListener`. Este componente captura:

- tipo
- descripción
- línea
- columna

### 10.2 Errores semánticos
En `Interpreter.php` se utiliza `addError()` para registrar errores semánticos con ubicación.

Ejemplos de errores controlados:

- variable no declarada
- cantidad incorrecta de argumentos
- acceso a algo que no es arreglo
- índice fuera de rango
- declaración múltiple inconsistente

### 10.3 Presentación de errores
Los errores se presentan en la consola con un formato legible y además se exportan en `errores.json`.

---

## 11. Funciones embebidas

### `now()`
Retorna fecha y hora actual en formato `Y-m-d H:i:s`.

### `len(valor)`
Retorna longitud de un string o cantidad de elementos de un arreglo.

### `typeOf(valor)`
Devuelve el tipo inferido del valor.

### `substr(texto, inicio, longitud)`
Retorna una subcadena a partir de un índice inicial y longitud.

---

## 12. Generación del parser

Para regenerar el lexer y parser en PHP se utiliza el archivo `Grammar.g4` junto con ANTLR4.

Ejemplo de comando:

```bash
antlr4 -Dlanguage=PHP Grammar.g4 -visitor -o ANTLRv4/
```

Esto genera:

- lexer
- parser
- visitor
- base visitor
- archivos `.tokens` y `.interp`

---

## 13. Ejecución del proyecto

### 13.1 Instalar dependencias

```bash
composer install
```

### 13.2 Iniciar servidor

```bash
php -S localhost:8000
```

### 13.3 Acceso
Abrir en navegador:

```text
http://localhost:8000
```

---

## 14. Consideraciones técnicas

- El proyecto usa una arquitectura monolítica, por lo que frontend y backend están integrados.
- La lógica del lenguaje reside en el backend PHP.
- La interfaz únicamente actúa como medio de entrada y visualización.
- El parser se genera automáticamente, pero la semántica se implementa manualmente en el visitor.
- Los reportes pueden descargarse desde el frontend en formato JSON o TXT.

---

## 15. Posibles mejoras futuras

- validación estricta de tipos en más operaciones
- mejora del manejo de `main()` para garantizar unicidad y firma correcta
- soporte para más variantes de `switch`
- mejora del ámbito para distinguir funciones de bloques internos
- exportación de reportes en HTML o PDF
- resaltado de sintaxis en el editor

---

## 16. Conclusión

Golampi Interpreter integra los componentes esenciales de un intérprete académico: gramática, parser, visitor semántico, entorno, GUI, tabla de símbolos y reporte de errores. La solución permite demostrar de forma práctica el análisis y ejecución de un lenguaje inspirado en Go dentro de un entorno web sencillo y funcional.
