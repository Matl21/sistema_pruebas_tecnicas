<?php
require_once('./controllers/RespuestasController.php');
require_once('./controllers/EstudianteController.php');
require_once('./controllers/PreguntasController.php');
require_once('./class/EntityArray.php');
require_once('./class/Components.php');

//Instacia de la clase controlador
$respuestasController = new RespuestasController();
$estudianteController = new EstudianteController();
$preguntasController = new PreguntasController();
//Llenado del arreglo
$estudiantes = $estudianteController->read();
$preguntas = $preguntasController->read();

if (isset($_GET['id'])) {
   
if (isset($_POST['btn_enviar'])) {
    $fecha= date("Y-m-d");
    $respuestas= array();
    $respuestas = [$_POST['respuesta1'],$_POST['respuesta2'],$_POST['respuesta3'],
    $_POST['respuesta4'],$_POST['respuesta5'],$_POST['respuesta6'],$_POST['respuesta7'],
    $_POST['respuesta8'],$_POST['respuesta9'],$_POST['respuesta10'],$_POST['respuesta11'],
    $_POST['respuesta12'],$_POST['respuesta13'],$_POST['respuesta14'],$_POST['respuesta15'],
    $_POST['respuesta16'],$_POST['respuesta17'],$_POST['respuesta18'],$_POST['respuesta19'],
    $_POST['respuesta20']];

    $id_estudiante=$_GET['id'];
    $inicio=41;
    $c=0;
    for ($i=0; $i <20 ; $i++) { 
        $c+=1;
        if ($c!=4) {
            //Conversion de los datos a arreglo
            $arreglo= EntityArray::respuestasArray(null,($i+$inicio),$id_estudiante,$respuestas[$i],$fecha,false,0,false);
            //Insertar un registro
            $respuestasController->create($arreglo);

        }else{
            //Conversion de los datos a arreglo
            $arreglo= EntityArray::respuestasArray(null,($i+$inicio),$id_estudiante,$respuestas[$i],$fecha,true,0,false);
            //Insertar un registro
            $respuestasController->create($arreglo);
            $c=0;
        }
    }
    Components::messageAgregar();
    header("Location: index.php?contenido=pages/respuestas/mostrarRespuestas.php&id_estudiante=$id_estudiante");
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prueba HTML</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<form  method="post">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-pills">
        <li class="nav-item ">
            <a class="nav-link active animated heartBeat" data-toggle="tab" href="#indicaciones">Indicaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#etapa1">Etapa 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#etapa2">Etapa 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#etapa3">Etapa 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#etapa4">Etapa 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#etapa5">Etapa 5</a>
        </li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active container" id="indicaciones">
            <br />
            <h3 class="">Indicaciones para el estudiante:</h3>
            <hr>
            <p>Complete el cuestionario atendiendo las tres indicaciones que se describen a continuación:
            </p>
            <p>A) La prueba consiste en una serie de afirmaciones y preguntas derivadas de criterios de
                evaluación
                seleccionados a partir del programa de formación. Lea cuidadosamente cada una de las
                afirmaciones y utilice la
                siguiente escala para dar su valoración.</p>
            <p>B) Utilice la siguiente “escala de valoración” de acuerdo con sus conocimientos y
                experiencias:</p>
            <li>1. No conozco ni se hacerlo.</li>
            <li>2. Conozco, pero no sé hacerlo.</li>
            <li>3. Sé hacerlo empíricamente</li>
            <li>4. Conozco y tengo algún dominio, pero no lo práctico.</li>
            <li>5. Conozco, sé hacerlo y lo practico</li>
            <p>Cuando complete el cuestionario, por favor, marque con el símbolo (√), el número de la opción
                seleccionada. Note
                que solo puede hacer una elección por pregunta. Observe además que cambia el orden de los
                números de la escala
                de una fila a la siguiente.</p>
            <p>C) Responda las preguntas abiertas que aparecen planteadas al final de cada bloque de
                afirmaciones, expresando
                sus ideas en forma sintética y clara.</p>
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>
        <div class="tab-pane container" id="etapa1">
            <br />
            <table class="table-responsive table-bordered table-striped">
                <tr>
                    <td colspan="2">
                        <h4>1. Diseñar páginas web editando su estructura para personalizar el entorno visual.</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>1.1 Utilizar la sintaxis básica de etiquetas para dar formato al texto de las páginas
                            web.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta1',5); ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>1.2 Modificar el color de los párrafos en los documentos HTML.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta2',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>1.3 Cambiar el tipo de fuente que utilizan los párrafos.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta3',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>1.4 ¿En qué parte de la estructura de una página web se coloca la línea de código para
                            personalizar el fondo y cuáles son los parámetros que se utilizan?</label>
                    </td>
                    <td>
                        <?php Components::generarTextArea('respuesta4');?>
                        <br>
                    </td>
                </tr>
            </table>
            <br />
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>


        <div class="tab-pane container" id="etapa2">
            <br />
            <table class="table-responsive table-bordered table-striped">
                <tr>
                    <td colspan="2">
                        <h4>2. Elaborar plantillas para demostrar, evaluar y promocionar un diseño de una página web.
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>2.1 Modificar diversas propiedades de las imágenes.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta5',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>2.2 Aplicar diversas capas a las imágenes para añadir diversos elementos. </label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta6',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>2.3 Optimizar imágenes para su uso en la web.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta7',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>2.4 ¿Justifique porque al diseñar una plantilla de página Web utilizando Photoshop se
                            tiene que programar primeramente en JavaScript?</label>
                    </td>
                    <td>
                        <?php Components::generarTextArea('respuesta8');?>
                        <br><br>
                    </td>
                </tr>
            </table>
            <br />
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>

        <div class="tab-pane container" id="etapa3">
            <br />
            <table class="table-responsive table-bordered table-striped">
                <tr>
                    <td colspan="2">
                        <h4>3. Diseñar páginas web utilizando las etiquetas básicas de HTML que permitan maquetar un
                            sitio de manera correcta y funcional. </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>3.1 Insertar imágenes de manera correcta en las páginas web utilizando la etiqueta
                            respectiva. </label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta9',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>3.2 Identificar los diversos tipos de hipervínculos que se pueden añadir a las páginas
                            web. </label>
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
                        <label>3.4 ¿Por qué en una página web diseñada para qué presente un sonido al acceder, no genera
                            dicha ejecución?</label>
                    </td>
                    <td>
                        <?php Components::generarTextArea('respuesta12');?>
                        <br>
                    </td>
                </tr>
            </table>
            <br />
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>

        <div class="tab-pane container" id="etapa4">
            <br />
            <table class="table-responsive table-bordered table-striped">
                <tr>
                    <td colspan="2">
                        <h4>4. Programar páginas web utilizando JavaScript para dotarlas de dinamismo y que respondan a
                            los eventos que el usuario realiza.</h4>
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
                        <label>4.2 Manejar la sintaxis básica de JavaScript como la declaración de variables,
                            operadores.</label>
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
                        <label>4.4 ¿Qué pasaría si se coloca de manera incorrecta el llamado del enlace de JavaScript en
                            una página web?</label>
                    </td>
                    <td>
                        <?php Components::generarTextArea('respuesta16');?>
                        <br>
                    </td>
                </tr>
            </table>
            <br />
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>

        <div class="tab-pane container" id="etapa5">
            <br />
            <table class="table-responsive table-bordered table-striped">
                <tr>
                    <td colspan="2">
                        <h4>5. Emplear de manera adecuada librerías y/o FrameWorks de JavaScript para diseñar páginas
                            web que respondan a las interacciones de los usuarios.</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>5.1 Distinguir la sintaxis básica de jQuery.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta17',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>5.2 Manipular elementos HTML y CSS desde jQuery.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta18',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>5.3 Manipular de manera acertada los componentes de Angular.</label>
                    </td>
                    <td>
                        <?php Components::generarRadios('respuesta19',5); ?>
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>5.4 ¿Por qué para aplicar el framework Angular en una página web se hace la llamada a un
                            archivo con formato de JavaScript? </label>
                    </td>
                    <td>
                        <?php Components::generarTextArea('respuesta20');?>
                    </td>
                </tr>
            </table>
            <br />
            <button type="submit" class="btn btn-danger btn_center" name="btn_enviar">Enviar formulario <i
                    class="fas fa-arrow-right"></i></button>
        </div>

    </div>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>