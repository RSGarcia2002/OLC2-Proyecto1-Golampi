# Golampi Interpreter  
**Proyecto 1 – Organización de Lenguajes y Compiladores 2**

Intérprete del lenguaje **Golampi**, desarrollado utilizando **ANTLR4 y PHP**, con interfaz web para escribir, ejecutar código y visualizar reportes.

---

# Descripción

Este proyecto implementa un intérprete para el lenguaje Golampi que permite:

- escribir código en el editor integrado
- ejecutar el programa
- visualizar la salida en consola
- mostrar errores con línea y columna
- generar tabla de símbolos
- descargar reportes

El intérprete utiliza el patrón **Visitor** generado por **ANTLR4** para recorrer el árbol de análisis sintáctico y ejecutar las instrucciones.

---

# Tecnologías utilizadas

- ANTLR4
- PHP
- JavaScript
- HTML / CSS
- Git

---

# Estructura del proyecto

```
Golampi/
│
├── Grammar.g4
├── Interpreter.php
├── Environment.php
├── Foreign.php
├── Invocable.php
├── Natives.php
│
├── index.php
├── bootstrap.php
│
├── static/
│   ├── script.js
│   └── style.css
│
├── manual_usuario.md
├── manual_tecnico.md
│
└── README.md
```

---

# Características del lenguaje

## Tipos de datos

```
int32
float32
bool
rune
string
```

---

## Variables

Declaración larga

```
var x int32 = 10
```

Declaración corta

```
x := 10
```

---

## Constantes

```
const PI float32 = 3.14
```

---

## Operadores

```
+  -  *  /  %
== != > < >= <=
&& ||
```

---

## Control de flujo

```
if
for
switch
break
continue
return
```

---

## Funciones

```
func suma(a int32, b int32) int32 {
    return a + b
}
```

---

## Arreglos

```
var nums [5]int32
```

Matrices

```
var matrix [3][3]int32
```

---

# Consola de ejecución

El intérprete muestra la salida del programa en una consola integrada que incluye:

- numeración de líneas
- salida del programa
- mensajes de error

---

# Manejo de errores

El sistema reporta errores con la siguiente información:

```
Tipo de error
Descripción
Línea
Columna
```

Tipos de error:

- sintáctico
- semántico
- ejecución

---

# Tabla de símbolos

Durante la ejecución se registra:

```
Identificador
Tipo
Ámbito
Valor
Línea
Columna
```

La tabla puede descargarse como archivo JSON.

---

# Reportes disponibles

Desde la interfaz se pueden descargar:

- salida de ejecución
- lista de errores
- tabla de símbolos

---

# Ejemplo de programa

```
func main() {

    misNotas := [60, 75, 82, 90]

    for i := 0; i < 4; i++ {
        fmt.Println(misNotas[i])
    }

}
```

---

# Ejecución del proyecto

1. Clonar repositorio

```
git clone https://github.com/usuario/OLC2-Proyecto1-Golampi.git
```

2. Entrar al proyecto

```
cd OLC2-Proyecto1-Golampi
```

3. Ejecutar servidor PHP

```
php -S localhost:8000
```

4. Abrir navegador

```
http://localhost:8000
```

---

# Autor

Randall García  
Proyecto 1 – Organización de Lenguajes y Compiladores 2  
Universidad de San Carlos de Guatemala