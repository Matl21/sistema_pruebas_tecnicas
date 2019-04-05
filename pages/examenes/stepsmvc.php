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

if (isset($_POST['btn_enviar'])) {
    echo "Entro";
    $fecha= date("Y-m-d");
    $respuestas= array();
    $respuestas = [$_POST['respuesta1'],$_POST['respuesta2'],$_POST['respuesta3'],
    $_POST['respuesta4'],$_POST['respuesta5'],$_POST['respuesta6'],$_POST['respuesta7'],
    $_POST['respuesta8'],$_POST['respuesta9'],$_POST['respuesta10'],$_POST['respuesta11'],
    $_POST['respuesta12'],$_POST['respuesta13'],$_POST['respuesta14'],$_POST['respuesta15'],
    $_POST['respuesta16'],$_POST['respuesta17'],$_POST['respuesta18'],$_POST['respuesta19'],
    $_POST['respuesta20']];


    for ($i=0; $i <count($respuestas) ; $i++) { 
        echo $respuestas[$i]+ " <br/>";
    }
    /*
    $c=0;
    for ($i=0; $i <20 ; $i++) { 
        $c+=0;
        if (c!=4) {
            //Conversion de los datos a arreglo
            $arreglo= EntityArray::respuestasArray(null,($i+1),1,$respuestas[$i],$fecha,false,0);
            //Insertar un registro
            $respuestasController->create($arreglo);
        }else{
            //Conversion de los datos a arreglo
            $arreglo= EntityArray::respuestasArray(null,($i+1),1,$respuestas[$i],$fecha,true,0);
            //Insertar un registro
            $respuestasController->create($arreglo);
            $c=0;
        }
    }
    */
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Smart Wizard - a JavaScript jQuery Step Wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include SmartWizard CSS -->
    <link href="public/css/smart/smart_wizard.css" rel="stylesheet" type="text/css" />

    <!-- Optional SmartWizard theme -->
    <link href="public/css/smart/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
    <link href="public/css/smart/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
    <link href="public/css/smart/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <br />
        <form id="frm" role="form" data-toggle="validator" method="post" >

            <!-- SmartWizard html -->
            <div id="smartwizard" class="algo">

                <ul>
                    <li><a href="#step-1">Indicaciones<br /><small>DeScripción</small></a></li>
                    <li><a href="#step-2">Etapa 1<br /><small>pregunta1-4</small></a></li>
                    <li><a href="#step-3">Etapa 2<br /><small>pregunta4-8</small></a></li>
                    <li><a href="#step-4">Etapa 3<br /><small>pregunta8-12</small></a></li>
                    <li><a href="#step-5">Etapa 4<br /><small>pregunta12-16</small></a></li>
                    <li><a href="#step-6">Etapa 4<br /><small>pregunta16-20</small></a></li>
                    <li><a href="#step-7">Finalizar<br /><small>Enviar Datos</small></a></li>
                </ul>

                <div>
                    <div id="step-1">
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

                    </div>
                    <div id="step-2">
                        <div id="form-step-1" role="form" data-toggle="validator">
                            <div class="form-group">
                                <table class="table-responsive table-bordered table-striped">

                                    <tr>
                                        <td colspan="2">
                                            <h4>1. Elaborar algoritmos y diagramas que ayuden a la formulación de una
                                                solución viable
                                                aplicando lógica funcional</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <td>
                                            <?php Components::generarRadios('respuesta1',5); ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>1.2 Detectar los posibles errores en la ejecución de un pseudocódigo
                                                usando un software
                                                compilador </label>
                                        </td>
                                        <td>
                                            <?php Components::generarRadios('respuesta2',5); ?>
                                            <br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>1.3 Elaborar diagramas de flujo utilizando simbología de
                                                procesos</label>
                                        </td>
                                        <td>
                                            <?php Components::generarRadios('respuesta3',5); ?>
                                            <br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>1.4 ¿Cuáles son las posibles causas que no permiten generar los
                                                resultados esperados al
                                                ejecutar un diagrama de flujo de un proceso matemático usando un
                                                software
                                                compilador?</label>
                                        </td>
                                        <td>
                                            <?php Components::generarTextArea('respuesta4');?>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <div id="form-step-2" role="form" data-toggle="validator">
                            <div class="form-group">
                                <table class="table-responsive table-bordered table-striped">

                                    <tr>
                                        <td colspan="2">
                                            <h4>2. Desarrollar operaciones básicas usando sintaxis C# de manera
                                                funcional y ordenada</h4>
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
                                            <label>2.1 Resolver operaciones matemáticas básicas en C#. </label>
                                        </td>
                                        <td>
                                            <?php Components::generarRadios('respuesta6',5); ?>
                                            <br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>2.3 Elaborar soluciones a problemas básicos en C#</label>
                                        </td>
                                        <td>
                                            <?php Components::generarRadios('respuesta7',5); ?>
                                            <br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>2.4 ¿Por qué es necesario crear métodos o funciones si podemos hacer
                                                el mismo proceso
                                                dentro del flujo del programa?</label>
                                        </td>
                                        <td>
                                            <?php Components::generarTextArea('respuesta8');?>
                                            <br><br>
                                        </td>
                                    </tr>
                                </table>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div id="step-4" class="">

                        <div id="form-step-3" role="form" data-toggle="validator">
                            <div class="form-group">
                                <table class="table-responsive table-bordered table-striped">
                                    <tr>
                                        <td colspan="2">
                                            <h4>3. Identificar los métodos usados para procesar información de una base
                                                de datos </h4>
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
                                            <label>3.2 Diferenciar entre los tipos de datos que utiliza una Base de
                                                Datos </label>
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
                                            <label>3.4 ¿Cuál es el resultado de coloca primero la creación de las tablas
                                                con la descripción
                                                de los campos y luego la línea de código donde se crean la base de datos
                                                en un script de
                                                T-SQL?</label>
                                        </td>
                                        <td>
                                            <?php Components::generarTextArea('respuesta12');?>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div id="step-5" class="">
                        <div id="form-step-3" role="form" data-toggle="validator">
                            <div class="form-group">
                                <table class="table-responsive table-bordered table-striped">
                                    <tr>
                                        <td colspan="2">
                                            <h4>4. Desarrollar aplicaciones en lenguaje C# usando el paradigma de
                                                programación Orientada a
                                                Objetos</h4>
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
                                            <label>4.4 ¿Qué pasaría si instanciamos un objeto a partir de una clase en
                                                la cual las
                                                propiedades no se declaran tipo public?</label>
                                        </td>
                                        <td>
                                            <?php Components::generarTextArea('respuesta16');?>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div id="step-6" class="">
                        <div id="form-step-3" role="form" data-toggle="validator">
                            <div class="form-group">
                                <table class="table-responsive table-bordered table-striped">
                                    <tr>
                                        <td colspan="2">
                                            <h4>5. Desarrollar buenas prácticas de programación</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>5.1 Identificar los conceptos básicos de la calidad del
                                                software</label>
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
                                            <label>5.4 ¿Justifique para qué se realiza la documentación del código y
                                                cuáles son los tipos de
                                                comentarios que podemos aplicar a un programa? </label>
                                        </td>
                                        <td>
                                            <?php Components::generarTextArea('respuesta20');?>
                                        </td>
                                    </tr>

                                </table>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div id="step-7" class="">
                        <h2>Felicidades! Has terminado</h2>
                        <p>
                            Ahora ya puedes darle a boton finalizar pero antes, debemos asegurar que estas conforme con
                            tus respuestas:
                        </p>
                        <div id="form-step-3" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="terms">Estoy de acuerdo con mis respuestas</label>
                                <input type="checkbox" id="terms"
                                    data-error="Porfavor chequea la palomita para asegurarnos" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <input type="submit" name="btn_enviar" >

        </form>

    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>


    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="public/js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        // Toolbar extra buttons
        var btnFinish = $('<button type="submit" name="btn_enviars"></button>').text('Finalizar')
            .addClass('btn btn-info')
            .on('click', function() {
                if (!$(this).hasClass('disabled')) {
                    var elmForm = $("#myForm");
                    if (elmForm) {
                        elmForm.validator('validate');
                        var elmErr = elmForm.find('.has-error');
                        if (elmErr && elmErr.length > 0) {
                            alert('Aun debes terminar el formulario, antes de enviarlo');
                            return false;
                        } else {
                            alert('Genial! ya enviaste tus datos, gracias :)');
                            elmForm.submit();
                            return false;
                        }
                    }
                }
            });
        var btnCancel = $('<button></button>').text('Cancelar')
            .addClass('btn btn-danger')
            .on('click', function() {
                $('#smartwizard').smartWizard("reset");
                $('#myForm').find("input, textarea").val("");
            });



        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'dots',
            transitionEffect: 'fade',
            toolbarSettings: {
                toolbarPosition: 'bottom',
                toolbarExtraButtons: [btnFinish, btnCancel]
            },
            anchorSettings: {
                markDoneStep: true, // add done css
                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
            }
        });

        $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
            var elmForm = $("#form-step-" + stepNumber);
            // stepDirection === 'forward' :- this condition allows to do the form validation
            // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
            if (stepDirection === 'forward' && elmForm) {
                elmForm.validator('validate');
                var elmErr = elmForm.children('.has-error');
                if (elmErr && elmErr.length > 0) {
                    // Form validation failed
                    return false;
                }
            }
            return true;
        });

        $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
            // Enable finish button only on last step
            if (stepNumber == 3) {
                $('.btn-finish').removeClass('disabled');
            } else {
                $('.btn-finish').addClass('disabled');
            }
        });

    });
    </script>
</body>

</html>