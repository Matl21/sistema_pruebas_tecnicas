<?php
include ('class/Components.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio1</title>
</head>
<body>
<form method="post">
<h3>Prueba Técnica de MVC</h3>
<hr>

<table class="table-responsive table-bordered table-striped">
<tr>
<td colspan="2">
<h4>1.	Elaborar algoritmos y diagramas que ayuden a la formulación de una solución viable aplicando lógica funcional</h4>
</td>
</tr>
<tr>
<td >
<label>1.1	Elaborar la sintaxis de un pseudocódigo según la nomenclatura preestablecida </label>
</td>
<td>
<?php Components::generarRadios('respuesta1',5); ?>
</td>
</tr>

<tr>
<td>
<label>1.2	Detectar los posibles errores en la ejecución de un pseudocódigo usando un software compilador </label>
</td>
<td>
<?php Components::generarRadios('respuesta2',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.3	Elaborar diagramas de flujo utilizando simbología de procesos</label>
</td>
<td>
<?php Components::generarRadios('respuesta3',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.4 ¿Cuáles son las posibles causas que no permiten generar los resultados esperados al ejecutar un diagrama de flujo de un proceso matemático usando un software compilador?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta4');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>2.	Desarrollar operaciones básicas usando sintaxis C# de manera funcional y ordenada</h4>
</td>
</tr>
<tr>
<td>
<label>2.1	Identificar la sintaxis del lenguaje C#.</label>
</td>
<td>
<?php Components::generarRadios('respuesta5',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.1	Resolver operaciones matemáticas básicas en C#.  </label>
</td>
<td>
<?php Components::generarRadios('respuesta6',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.3	Elaborar soluciones a problemas básicos en C#</label>
</td>
<td>
<?php Components::generarRadios('respuesta7',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.4	¿Por qué es necesario crear métodos o funciones si podemos hacer el mismo proceso dentro del flujo del programa?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta8');?>
<br><br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>3.	Identificar los métodos usados para procesar información de una base de datos  </h4>
</td>
</tr>
<tr>
<td>
<label>3.1 Identificar la sintaxis de SQL </label>
</td>
<td>
<?php Components::generarRadios('respuesta9',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.2 Diferenciar entre los tipos de datos que utiliza una Base de Datos </label>
</td>
<td>
<?php Components::generarRadios('respuesta10',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.3 Identificar las propiedades de las bases de datos</label>
</td>
<td>
<?php Components::generarRadios('respuesta11',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.4 ¿Cuál es el resultado de coloca primero la creación de las tablas con la descripción de los campos y luego la línea de código donde se crean la base de datos en un script de T-SQL?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta12');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>4.	Desarrollar aplicaciones en lenguaje C# usando el paradigma de programación Orientada a Objetos</h4>
</td>
</tr>
<tr>
<td>
<label>4.1 Configurar correctamente el uso de los NameSpaces. </label>
</td>
<td>
<?php Components::generarRadios('respuesta13',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.2 Declarar Variables y tipos de datos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta14',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.3 Implementar Métodos dentro del código del proyecto.</label>
</td>
<td>
<?php Components::generarRadios('respuesta15',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.4 ¿Qué pasaría si instanciamos un objeto a partir de una clase en la cual las propiedades no se declaran tipo public?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta16');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>5.	Desarrollar buenas prácticas de programación</h4>
</td>
</tr>
<tr>
<td>
<label>5.1 Identificar los conceptos básicos de la calidad del software</label>
</td>
<td>
<?php Components::generarRadios('respuesta17',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.2 Interpretar el código de un programa existente</label>
</td>
<td>
<?php Components::generarRadios('respuesta18',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.3 Utilizar herramientas para tomar apuntes</label>
</td>
<td>
<?php Components::generarRadios('respuesta19',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.4 ¿Justifique para qué se realiza la documentación del código y cuáles son los tipos de comentarios que podemos aplicar a un programa? </label>
</td>
<td>
<?php Components::generarTextArea('respuesta20');?>
</td>
</tr>

</table>
<br/>
<button type="submit" name="btn_editar" class="btn btn-primary">Enviar Formulario</button>


</form>
<?php
    if(isset($_POST['btn_form'])){
        
    }
?>

</body>
</html>