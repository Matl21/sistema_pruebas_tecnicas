<?php
require_once('./class/Components.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio2</title>
</head>

<body>
    
<form method="post">
<h3>Prueba Técnica de JAVA</h3>
<hr>

<table class="table-responsive table-bordered table-striped">
<tr>
<td colspan="2">
<h4>1. Emplear algoritmos para resolver problemas.</h4>
</td>
</tr>
<tr>
<td >
<label>1.1	Resuelve problemas haciendo uso de algoritmos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta1',5); ?>
</td>
</tr>

<tr>
<td>
<label>1.2 Aplica algoritmos en lenguaje natural y pseudocódigo.</label>
</td>
<td>
<?php Components::generarRadios('respuesta2',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.3 Resuelve problemas en estructuras de pseudocódigo.</label>
</td>
<td>
<?php Components::generarRadios('respuesta3',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.4	¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de problemas?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta4');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>2. Diseñar páginas web HTML.</h4>
</td>
</tr>
<tr>
<td>
<label>2.1 Aplica los elementos básicos en Lenguaje de estructura HTML.</label>
</td>
<td>
<?php Components::generarRadios('respuesta5',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.2 Utiliza las partes de la estructura básica de un documento HTML.</label>
</td>
<td>
<?php Components::generarRadios('respuesta6',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.3 Aplica correctamente etiquetas en documentos HTML.</label>
</td>
<td>
<?php Components::generarRadios('respuesta7',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.4 ¿Escriba el nombre de las etiquetas de una estructura básica para una página en HTML?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta8');?>
<br><br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>3. Crear códigos basado en JAVA  </h4>
</td>
</tr>
<tr>
<td>
<label>3.1 Utiliza las instrucciones en un programa informática.</label>
</td>
<td>
<?php Components::generarRadios('respuesta9',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.2 Maneja la estructura básica en el Lenguaje JAVA. </label>
</td>
<td>
<?php Components::generarRadios('respuesta10',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.3 Aplica el uso correcto de variables en JAVA.</label>
</td>
<td>
<?php Components::generarRadios('respuesta11',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.4 Haciendo uso de un ejemplo, escriba la función para imprimir en JAVA.</label>
</td>
<td>
<?php Components::generarTextArea('respuesta12');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>4. Establecer conexión con la base de datos.</h4>
</td>
</tr>
<tr>
<td>
<label>4.1 Aplica el concepto y los tipos de datos en una Base de Datos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta13',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.2 Aplica propiedades ACID a bases de datos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta14',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.3 Crea conexiones a bases de datos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta15',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.4 Escriba la consulta básica para insertar datos en una Base de Datos.</label>
</td>
<td>
<?php Components::generarTextArea('respuesta16');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>5. Identificar en un código fuente posibles errores y hacer las modificacciones.</h4>
</td>
</tr>
<tr>
<td>
<label>5.1 Interpreta archivo de código fuente para la identificación de la estructura.</label>
</td>
<td>
<?php Components::generarRadios('respuesta17',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.2 Ejecuta casos de excepción en archivos de código fuente.</label>
</td>
<td>
<?php Components::generarRadios('respuesta18',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.3 Utiliza la técnica Debugging para la resolución de un problema.</label>
</td>
<td>
<?php Components::generarRadios('respuesta19',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.4 Elabore un ejemplo utilizando sintaxis para documentar un proceso.</label>
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
        echo "<h2>Salu</h2>";
    }
?>

</body>

</html>