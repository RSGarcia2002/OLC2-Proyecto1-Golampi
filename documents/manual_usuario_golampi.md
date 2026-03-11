# Manual de Usuario
## Golampi Interpreter

**Curso:** Organización de Lenguajes y Compiladores 2  
**Proyecto:** Proyecto 1 – Intérprete Golampi  
**Autor:** Randall García

---

## 1. Descripción general

Golampi Interpreter es una aplicación web desarrollada en PHP que permite escribir, cargar, ejecutar y guardar programas del lenguaje Golampi desde una interfaz gráfica. El sistema incluye un editor de código, consola de salida y panel de reportes para descargar el resultado, los errores y la tabla de símbolos.

La aplicación está orientada al análisis y ejecución de un lenguaje inspirado en Go, con soporte para variables, constantes, estructuras de control, funciones, arreglos, matrices, paso por referencia y funciones embebidas.

---

## 2. Requisitos mínimos

Para ejecutar el sistema se necesita lo siguiente:

- PHP 8 o superior
- Composer instalado
- Navegador web moderno
- Dependencias del proyecto instaladas en `vendor/`

---

## 3. Estructura visible para el usuario

La interfaz gráfica del sistema está compuesta por cuatro áreas principales:

### 3.1 Barra de acciones
Desde esta sección se puede:

- **Nuevo / Limpiar:** limpia el editor y la consola.
- **Cargar archivo:** permite abrir un archivo de texto con código Golampi.
- **Guardar código:** descarga el contenido actual del editor.
- **Ejecutar:** analiza y ejecuta el código fuente.
- **Limpiar consola:** borra únicamente la salida de la consola.

### 3.2 Editor de código
Es el área donde el usuario escribe o modifica el programa Golampi. Incluye numeración de líneas para facilitar la ubicación visual del código.

### 3.3 Consola de salida
Muestra el resultado del programa o los errores encontrados durante el análisis y la ejecución. También incluye numeración de líneas para mejorar la lectura.

### 3.4 Panel de reportes
Permite descargar tres salidas generadas por el sistema:

- `resultado.txt`
- `errores.json`
- `tabla_simbolos.json`

---

## 4. Puesta en marcha

### 4.1 Instalación de dependencias
Ubicado en la carpeta raíz del proyecto, ejecutar:

```bash
composer install
```

### 4.2 Iniciar el servidor
En la raíz del proyecto ejecutar:

```bash
php -S localhost:8000
```

### 4.3 Abrir la aplicación
En el navegador ingresar a:

```text
http://localhost:8000
```

---

## 5. Flujo de uso del sistema

### 5.1 Escribir código
El usuario puede redactar directamente el programa en el editor.

### 5.2 Cargar un archivo
Presionar **Cargar archivo** y seleccionar un archivo `.go` o `.txt` con código Golampi.

### 5.3 Ejecutar
Presionar el botón **Ejecutar** o usar el atajo:

```text
Ctrl + Enter
```

### 5.4 Revisar salida
Si el programa es correcto, la consola mostrará la salida producida por `print` o `fmt.Println`.

### 5.5 Revisar errores
Si existe un error sintáctico o semántico, la consola mostrará:

- tipo de error
- descripción
- línea
- columna

### 5.6 Descargar reportes
Desde el panel lateral se pueden guardar los archivos de salida para revisión o entrega.

---

## 6. Elementos del lenguaje soportados

El intérprete soporta las siguientes características del lenguaje Golampi:

### 6.1 Tipos de datos
- `int32`
- `float32`
- `bool`
- `rune`
- `string`
- `nil`

### 6.2 Declaraciones
- variables con `var`
- constantes con `const`
- declaración corta con `:=`
- declaración múltiple

### 6.3 Operaciones
- aritméticas: `+`, `-`, `*`, `/`, `%`
- relacionales: `==`, `!=`, `>`, `<`, `>=`, `<=`
- lógicas: `&&`, `||`, `!`
- asignación: `=`, `+=`, `-=`, `*=`, `/=`

### 6.4 Estructuras de control
- `if`
- `for` clásico
- `for` condicional
- `for` infinito
- `switch`
- `break`
- `continue`
- `return`

### 6.5 Funciones
- funciones sin parámetros
- funciones con parámetros
- funciones con retorno
- múltiples retornos
- hoisting
- paso por referencia con `&`

### 6.6 Arreglos
- arreglos simples
- arreglos multidimensionales
- acceso por índice
- asignación por índice
- inicialización de arreglos y matrices

### 6.7 Funciones embebidas
- `fmt.Println(...)`
- `len(...)`
- `now()`
- `substr(texto, inicio, longitud)`
- `typeOf(...)`

---

## 7. Ejemplos de uso

### 7.1 Hola mundo

```go
func main() {
    fmt.Println("Hola mundo")
}
```

### 7.2 Variables y operaciones

```go
func main() {
    x := 10
    y := 5
    fmt.Println(x + y)
}
```

### 7.3 Arreglo

```go
func main() {
    var nums [3]int32 = [3]int32{10, 20, 30}
    fmt.Println(nums[1])
}
```

### 7.4 For clásico

```go
func main() {
    for i := 0; i < 3; i++ {
        fmt.Println(i)
    }
}
```

### 7.5 Función con retorno

```go
func suma(a int32, b int32) int32 {
    return a + b
}

func main() {
    fmt.Println(suma(2, 3))
}
```

---

## 8. Manejo de errores

Cuando el sistema encuentra errores, estos se muestran en la consola con formato detallado.

### 8.1 Error sintáctico
Se produce cuando el programa no cumple la gramática del lenguaje.

Ejemplo de salida:

```text
[Error 1] Sintáctico: mismatched input 'else' expecting '{'
Línea: 8 | Columna: 4
```

### 8.2 Error semántico
Se produce cuando el programa viola una regla de ejecución.

Ejemplos:

- variable no declarada
- llamada a función con número incorrecto de argumentos
- acceso fuera de rango en arreglos
- uso de algo que no es función como si fuera función

Ejemplo de salida:

```text
[Error 1] Semántico: Índice fuera de rango: 5
Línea: 10 | Columna: 12
```

---

## 9. Reportes generados

### 9.1 Resultado
Archivo de texto con la salida válida producida por el programa.

### 9.2 Errores
Archivo JSON con la lista de errores detectados. Cada error incluye:

- tipo
- descripción
- línea
- columna

### 9.3 Tabla de símbolos
Archivo JSON con los identificadores registrados durante el análisis. Incluye:

- identificador
- tipo
- ámbito
- valor
- línea
- columna

---

## 10. Recomendaciones de uso

- Escribir siempre una función `main()` para iniciar la ejecución.
- Verificar la cantidad de parámetros al invocar funciones.
- Usar índices válidos al trabajar con arreglos y matrices.
- Descargar reportes al finalizar cada prueba importante.
- Utilizar la numeración de líneas del editor para ubicar más rápido los errores.

---

## 11. Problemas comunes

### El sistema no abre en el navegador
Verificar que el servidor PHP esté activo y que la URL sea correcta.

### No se ejecuta el código
Revisar en la consola si existe un error sintáctico o semántico.

### No se generan dependencias
Ejecutar nuevamente:

```bash
composer install
```

### La hora de `now()` no coincide con la local
La función utiliza la zona horaria configurada en el backend.

---

## 12. Conclusión

Golampi Interpreter permite analizar y ejecutar programas de manera visual desde una interfaz sencilla. Además de la ejecución, facilita la revisión del código mediante reportes y mensajes de error con línea y columna, mejorando así la depuración y comprensión del lenguaje.
