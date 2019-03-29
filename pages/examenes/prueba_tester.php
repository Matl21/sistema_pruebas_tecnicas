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
    <title>Ejercicio4</title>
</head>
<body>
<form method="post">
<h3>Prueba Técnica Tester de Software.</h3>
<hr>

<table class="table-responsive table-bordered table-striped">
<tr>
<td colspan="2">
<h4>1. Construir un ambiente de pruebas básico que verifiquen la funcionalidad de una aplicación utilizando una batería de pruebas.</h4>
</td>
</tr>
<tr>
<td >
<label>1.1 Realizar el análisis de requerimientos de funcionalidad de una aplicación.</label>
</td>
<td>
<?php Components::generarRadios('respuesta1',5); ?>
</td>
</tr>

<tr>
<td>
<label>1.2 Organizar la asignación de tareas que se desarrollaran en el ambiente de pruebas.</label>
</td>
<td>
<?php Components::generarRadios('respuesta2',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.3 Ejecutar pruebas backoffice, analyst y Project Managers</label>
</td>
<td>
<?php Components::generarRadios('respuesta3',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.4 ¿Cuál es la finalidad de realizar pruebas desde las etapas iniciales del desarrollo del software?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta4');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>2. Desarrollar operaciones básicas usando sintaxis C# de manera funcional y ordenada</h4>
</td>
</tr>
<tr>
<td>
<label>2.1 Identificar la sintaxis del lenguaje C#.</label>
</td>
<td>
<?php Components::generarRadios('respuesta5',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.2 Resolver operaciones matemáticas básicas en C#. </label>
</td>
<td>
<?php Components::generarRadios('respuesta6',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.3 Elaborar soluciones a problemas básicos en C#.</label>
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
<h4>3. Elaborar bases de datos utilizando gestores.</h4>
</td>
</tr>
<tr>
<td>
<label>3.1 Identificar la utilidad de las bases de datos en la vida cotidiana.</label>
</td>
<td>
<?php Components::generarRadios('respuesta9',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.2 Usar diversos gestores de bases de datos para crear bases de datos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta10',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.3 Utilizar el lenguaje SQL para leer, crear, modificar y eliminar datos desde las bases de datos. </label>
</td>
<td>
<?php Components::generarRadios('respuesta11',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.4 ¿En qué manera beneficia a la optimización de las base de datos, realizar la practica de normalización?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta12');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>4. Identificar la funcionabilidad de los programas informáticos y como están estructurados para diseñar análisis adecuados de las situaciones donde se apliquen.</h4>
</td>
</tr>
<tr>
<td>
<label>4.1 Identificar la utilidad de los programas informáticos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta13',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.2 Emplear silogismos lógicos para solventar problemas planteados.</label>
</td>
<td>
<?php Components::generarRadios('respuesta14',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.3 Identificar las diversas estructuras de control para solucionar problemas.</label>
</td>
<td>
<?php Components::generarRadios('respuesta15',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.4 ¿Por qué al usar una variable simple solo podemos almacenar un dato y cuando usamos arreglos podemos almacenar hasta N datos?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta16');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>5. Planear de manera correcta los proyectos de desarrollo de software, para que todos los miembros del equipo de desarrollo se integren en la entrega del producto de manera ágil.   </h4>
</td>
</tr>
<tr>
<td>
<label>5.1 Identificar las fases claves del proceso de gestión.</label>
</td>
<td>
<?php Components::generarRadios('respuesta17',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.2 Elaborar diagramas Gantt para gestionar el tiempo de realización de las diversas actividades.</label>
</td>
<td>
<?php Components::generarRadios('respuesta18',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.3 Completar la configuración de TFS en un entorno de trabajo.   </label>
</td>
<td>
<?php Components::generarRadios('respuesta19',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.4 ¿Por qué si utilizamos una herramienta de versionamiento de código fuente, podemos acceder a respaldos creados del proyecto de desarrollo que se elaboró?</label>
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