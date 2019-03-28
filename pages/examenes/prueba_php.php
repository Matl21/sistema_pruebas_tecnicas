<?php
/**--------  Añadir clases --------**/
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
        <?php  Components::generarRadios('respuesta1',5);?>
       
        <label></label>
        <label>1.2 Aplica algoritmos en lenguaje natural y pseudocódigo.</label>
        <?php Components::generarRadios('respuesta2',5);?>
        
        <label>1.3Resuelve problemas en estructuras de pseudocódigo.</label>
        <?php Components::generarRadios('respuesta3',5); ?>

        <label>1.4 ¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de problemas?</label>
        <?php Components::generarTextArea('respuesta4');?>
        <br><br>

        <h4>2. Diseñar páginas Web HTML</h4>
        <label>2.1 Aplica los elementos básicos en Lenguaje de estructura HTML.</label>
        <?php Components::generarRadios('respuesta5',5);  ?>

        <label>2.2 Utiliza las partes de la estructura básica de un documento HTML.</label>
        <?php Components::generarRadios('respuesta6',5);  ?>

        <label>2.3 Aplica correctamente etiquetas en documentos HTML.</label>
        <?php Components::generarRadios('respuesta7',5);  ?>
        <label>2.4 ¿Escriba el nombre de las etiquetas de una estructura básica para una página en HTML?</label>
        <?php Components::generarTextArea('respuesta8',5);?>
        <br><br>

        <h4>3. Crear códigos basados en PHP. </h4>
        <label>3.1 Utiliza las instrucciones en un programa informática. </label>
        <?php Components::generarRadios('respuesta9',5);  ?>

        <label>3.2 Maneja la estructura básica en el Lenguaje JAVA. </label>
        <?php Components::generarRadios('respuesta10',5);  ?>

        <label>3.3 Aplica el uso correcto de variables en JAVA.</label>
        <?php Components::generarRadios('respuesta11',5);  ?>
        <label>3.4 Haciendo uso de un ejemplo, escriba la función para imprimir en JAVA.</label>
        <?php Components::generarTextArea('respuesta12',5);?>
        <br>

        <h4>4. Establecer conección con la base de datos.</h4>
        <label>4.1 Aplica el concepto y los tipos de datos en una Base de Datos.</label>
        <?php Components::generarRadios('respuesta13',5);  ?>

        <label>4.2 Aplica propiedades ACID a bases de datos.</label>
        <?php Components::generarRadios('respuesta14',5);  ?>

        <label>4.3 Crea conexiones a bases de datos.</label>
        <?php Components::generarRadios('respuesta15',5);  ?>

        <label>4.4 Escriba la consulta básica para insertar datos en una Base de Datos.</label>
        <?php Components::generarTextArea('respuesta16',5);?>
        <br>
        <br>

        <h4>5. Identificar en un código fuente posibles errores y hacer las modificaciones</h4>
        <label>5.1 Interpreta archivo de código fuente para la identificación de la estructura.</label>
        <?php Components::generarRadios('respuesta17',5);  ?>

        <label>5.2 Ejecuta casos de excepción en archivos de código fuente.</label>
        <?php Components::generarRadios('respuesta18',5);  ?>

        <label>5.3 Utiliza la técnica Debugging para la resolución de un problema.</label>
        <?php Components::generarRadios('respuesta19',5);  ?> 

        <label>5.4 Elabore un ejemplo utilizando sintaxis para documentar un proceso. </label>
        <?php Components::generarTextArea('respuesta20',5);?>
        <br>
        <br>


    </form>
    <?php
    if(isset($_POST['btn_form'])){
        
    }
?>

</body>

</html>