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
    <title>Ejercicio1</title>
</head>
<body>
<form method="post">
<h3>Prueba Técnica de HTML</h3>
<hr>

<table class="table-responsive table-bordered table-striped">
<tr>
<td colspan="2">
<h4>1.  Diseñar páginas web editando su estructura para personalizar el entorno visual.</h4>
</td>
</tr>
<tr>
<td >
<label>1.1	Utilizar la sintaxis básica de etiquetas para dar formato al texto de las páginas web.</label>
</td>
<td>
<?php Components::generarRadios('respuesta1',5); ?>
</td>
</tr>

<tr>
<td>
<label>1.2	Modificar el color de los párrafos en los documentos HTML.</label>
</td>
<td>
<?php Components::generarRadios('respuesta2',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.3	Cambiar el tipo de fuente que utilizan los párrafos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta3',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>1.4	¿En qué parte de la estructura de una página web se coloca la línea de código para personalizar el fondo y cuáles son los parámetros que se utilizan?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta4');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>2.	Elaborar plantillas para demostrar, evaluar y promocionar un diseño de una página web.</h4>
</td>
</tr>
<tr>
<td>
<label>2.1	Modificar diversas propiedades de las imágenes.</label>
</td>
<td>
<?php Components::generarRadios('respuesta5',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.2	Aplicar diversas capas a las imágenes para añadir diversos elementos. </label>
</td>
<td>
<?php Components::generarRadios('respuesta6',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.3	Optimizar imágenes para su uso en la web.</label>
</td>
<td>
<?php Components::generarRadios('respuesta7',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>2.4	¿Justifique porque al diseñar una plantilla de página Web utilizando Photoshop se tiene que programar primeramente en JavaScript?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta8');?>
<br><br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>3.	Diseñar páginas web utilizando las etiquetas básicas de HTML que permitan maquetar un sitio de manera correcta y funcional.  </h4>
</td>
</tr>
<tr>
<td>
<label>3.1 Insertar imágenes de manera correcta en las páginas web utilizando la etiqueta respectiva. </label>
</td>
<td>
<?php Components::generarRadios('respuesta9',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.2 Identificar los diversos tipos de hipervínculos que se pueden añadir a las páginas web. </label>
</td>
<td>
<?php Components::generarRadios('respuesta10',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.3 Elaborar una página web utilizando las diversas etiquetas HTML.</label>
</td>
<td>
<?php Components::generarRadios('respuesta11',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>3.4 ¿Por qué en una página web diseñada para qué presente un sonido al acceder, no genera dicha ejecución?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta12');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>4.	Programar páginas web utilizando JavaScript para dotarlas de dinamismo y que respondan a los eventos que el usuario realiza.</h4>
</td>
</tr>
<tr>
<td>
<label>4.1 Utilizar diversos editores de texto para escribir código JavaScript.</label>
</td>
<td>
<?php Components::generarRadios('respuesta13',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.2 Manejar la sintaxis básica de JavaScript como la declaración de variables, operadores.</label>
</td>
<td>
<?php Components::generarRadios('respuesta14',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.3 Utilizar las diversas estructuras de control para resolver problemas básicos.</label>
</td>
<td>
<?php Components::generarRadios('respuesta15',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>4.4 ¿Qué pasaría si se coloca de manera incorrecta el llamado del enlace de JavaScript en una página web?</label>
</td>
<td>
<?php Components::generarTextArea('respuesta16');?>
<br>
</td>
</tr>

<tr>
<td colspan="2">
<h4>5.	Emplear de manera adecuada librerías y/o FrameWorks de JavaScript para diseñar páginas web que respondan a las interacciones de los usuarios.</h4>
</td>
</tr>
<tr>
<td>
<label>5.1  Distinguir la sintaxis básica de jQuery.</label>
</td>
<td>
<?php Components::generarRadios('respuesta17',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.2  Manipular elementos HTML y CSS desde jQuery.</label>
</td>
<td>
<?php Components::generarRadios('respuesta18',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.3  Manipular de manera acertada los componentes de Angular.</label>
</td>
<td>
<?php Components::generarRadios('respuesta19',5); ?>
<br><br>
</td>
</tr>

<tr>
<td>
<label>5.4  ¿Por qué para aplicar el framework Angular en una página web se hace la llamada a un archivo con formato de JavaScript? </label>
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