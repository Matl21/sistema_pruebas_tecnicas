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
    <?php
    /**--------  Añadir clases --------**/
    include ('class/components.php');

    /*--------- Preguntas -----------*/
    $pregunta1 = '1.1 Resuelve problemas haciendo uso de algoritmos.';
    $pregunta2 = '1.2 Aplica algoritmos en lenguaje natural y pseudocódigo.';
    $pregunta3 = '1.3 Resuelve problemas en estructuras de pseudocódigo.';
    $pregunta4 = '1.4 ¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de problemas?';
    $pregunta5 = '';
    $pregunta6 = '';
    $pregunta7 = '';
    $pregunta8 = '';
    $pregunta9 = '';
    $pregunta10 = '';
    $pregunta11 = '';
    $pregunta12 = '';
    $pregunta13 = '';
    $pregunta14 = '';
    $pregunta15 = '';
    $pregunta16 = '';
    ?>
    <form method="post">
        <h4>1. Emplear algoritmos para resolver problemas.</h4>
        <?php 
        Components::generarPregunta($pregunta1);
        Components::generarRadios('respuesta1',5);
        ?>
        <br>
        <br>

        <label></label>
        <?php 
        Components::generarPregunta($pregunta2);
        Components::generarRadios('respuesta2',5);
        ?>
        <br>
        <br>

        <label></label>
        <?php 
        Components::generarPregunta($pregunta3);
        Components::generarRadios('respuesta3',5);
        ?>
        <br>
        <br>
        <?php
        Components::generarPregunta($pregunta4);
        Components::generarTextArea('respuesta4');
        ?>
        <br>


        <h4>2. Diseñar páginas web HTML.</h4>
        <label>2.1 Aplica los elementos básicos en Lenguaje de estructura HTML.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>2.2 Utiliza las partes de la estructura básica de un documento HTML.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>2.3 Aplica correctamente etiquetas en documentos HTML.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>
        <label>2.4 ¿Escriba el nombre de las etiquetas de una estructura básica para una página en HTML?</label>
        <br>
        <textarea name="pregunta8" id="" cols="70" rows="10"></textarea>
        <br><br>



        <h4>3. Crear códigos basados en JAVA. </h4>
        <label>3.1 Utiliza las instrucciones en un programa informática. </label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>3.2 Maneja la estructura básica en el Lenguaje JAVA. </label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>3.3 Aplica el uso correcto de variables en JAVA.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>
        <label>3.4 Haciendo uso de un ejemplo, escriba la función para imprimir en JAVA.</label>
        <br>
        <textarea name="pregunta8" id="" cols="70" rows="10"></textarea>
        <br>



        <h4>4. Establecer conección con la base de datos.</h4>
        <label>4.1 Aplica el concepto y los tipos de datos en una Base de Datos.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>4.2 Manejar la sintaxis básica de JavaScript como la declaración de variables, operadores.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>4.3 Utilizar las diversas estructuras de control para resolver problemas básicos.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>
        <label>4.4 ¿Qué pasaría si se coloca de manera incorrecta el llamado del enlace de JavaScript en una página
            web?</label>
        <br>
        <textarea name="pregunta8" id="" cols="70" rows="10"></textarea>
        <br>



        <h4>5. Emplear de manera adecuada librerías y/o FrameWorks de JavaScript para diseñar páginas web que respondan
            a las interacciones de los usuarios.</h4>
        <label>5.1- Distinguir la sintaxis básica de jQuery.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>5.2- Manipular elementos HTML y CSS desde jQuery.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>

        <label>5.3 - Manipular de manera acertada los componentes de Angular.</label>
        <input type="radio" name="pregunta1" value="1">1
        <input type="radio" name="pregunta1" value="2">2
        <input type="radio" name="pregunta1" value="3">3
        <input type="radio" name="pregunta1" value="4">4
        <input type="radio" name="pregunta1" value="5">5<br><br>
        <label>5.4- ¿Por qué para aplicar el framework Angular en una página web se hace la llamada a un archivo con
            formato de JavaScript? </label>
        <br>
        <textarea name="pregunta8" id="" cols="70" rows="10"></textarea>
        <br>


    </form>
    <?php
    if(isset($_POST['btn_form'])){
        echo "<h2>Salu</h2>";
    }
?>

</body>

</html>