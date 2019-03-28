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
    <title>Ejercicio2</title>
</head>

<body>
    
    <form method="post">
        <h4>1. Emplear algoritmos para resolver problemas.</h4>
        <label>1.1 Resuelve problemas haciendo uso de algoritmos.</label>
        <?php Components::generarRadios('respuesta1',5); ?>
        <br>
        <br>

        <label>1.2 Aplica algoritmos en lenguaje natural y pseudocódigo.</label>
        <?php Components::generarRadios('respuesta2',5); ?>
        <br>
        <br>

        <label>1.3 Resuelve problemas en estructuras de pseudocódigo.</label>
        <?php Components::generarRadios('respuesta3',5); ?>
        <br>
        <br>
        <label>1.4 ¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de problemas?</label>
        <?php Components::generarTextArea('respuesta4');?>
        <br>


        <h4>2. Diseñar páginas web HTML.</h4>
        <label>2.1 Aplica los elementos básicos en Lenguaje de estructura HTML.</label>
        <?php Components::generarRadios('respuesta5',5); ?>
        <br><br>

        <label>2.2 Utiliza las partes de la estructura básica de un documento HTML.</label>
        <?php Components::generarRadios('respuesta6',5); ?>
        <br><br>

        <label>2.3 Aplica correctamente etiquetas en documentos HTML.</label>
        <?php Components::generarRadios('respuesta7',5); ?>
        <br><br>

        <label>2.4 ¿Escriba el nombre de las etiquetas de una estructura básica para una página en HTML?</label>
        <br>
        <?php Components::generarTextArea('respuesta8');?>
        <br><br>


        <h4>3. Crear códigos basados en JAVA. </h4>
        <label>3.1 Utiliza las instrucciones en un programa informática. </label>
        <?php Components::generarRadios('respuesta9',5); ?>
        <br><br>

        <label>3.2 Maneja la estructura básica en el Lenguaje JAVA. </label>
        <?php Components::generarRadios('respuesta10',5); ?>
        <br><br>

        <label>3.3 Aplica el uso correcto de variables en JAVA.</label>
        <?php Components::generarRadios('respuesta11',5); ?>
        <br><br>

        <label>3.4 Haciendo uso de un ejemplo, escriba la función para imprimir en JAVA.</label>
        <br>
        <?php Components::generarTextArea('respuesta12');?>
        <br>

        <h4>4. Establecer conección con la base de datos.</h4>
        <label>4.1 Aplica el concepto y los tipos de datos en una Base de Datos.</label>
        <?php Components::generarRadios('respuesta13',5); ?>
        <br><br>

        <label>4.2 Manejar la sintaxis básica de JavaScript como la declaración de variables, operadores.</label>
        <?php Components::generarRadios('respuesta14',5); ?>
        <br><br>

        <label>4.3 Utilizar las diversas estructuras de control para resolver problemas básicos.</label>
        <?php Components::generarRadios('respuesta15',5); ?>
        <br><br>

        <label>4.4 ¿Qué pasaría si se coloca de manera incorrecta el llamado del enlace de JavaScript en una página web?</label>
        <br>
        <?php Components::generarTextArea('respuesta16');?>
        <br>


        <h4>5. Emplear de manera adecuada librerías y/o FrameWorks de JavaScript para diseñar páginas web que respondan
            a las interacciones de los usuarios.</h4>
        <label>5.1- Distinguir la sintaxis básica de jQuery.</label>
        <?php Components::generarRadios('respuesta17',5); ?>
        <br><br>

        <label>5.2- Manipular elementos HTML y CSS desde jQuery.</label>
        <?php Components::generarRadios('respuesta18',5); ?>
        <br><br>

        <label>5.3 - Manipular de manera acertada los componentes de Angular.</label>
        <?php Components::generarRadios('respuesta19',5); ?>
        <br><br>
        <label>5.4- ¿Por qué para aplicar el framework Angular en una página web se hace la llamada a un archivo con formato de JavaScript? </label>
        <br>
        <?php Components::generarTextArea('respuesta20');?>
        <br>

    </form>
    <?php
    if(isset($_POST['btn_form'])){
        echo "<h2>Salu</h2>";
    }
?>

</body>

</html>