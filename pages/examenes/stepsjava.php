<?php
require_once('./class/Components.php');
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
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

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
                                            <h4>1. Emplear algoritmos para resolver problemas.</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>1.1 Resuelve problemas haciendo uso de algoritmos.</label>
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
                                            <label>1.4 ¿Cuáles son las funciones que desempeñan los algoritmos en la
                                                resolución de
                                                problemas?</label>
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
                                            <h4>2. Diseñar páginas web HTML.</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>2.1 Aplica los elementos básicos en Lenguaje de estructura
                                                HTML.</label>
                                        </td>
                                        <td>
                                            <?php Components::generarRadios('respuesta5',5); ?>
                                            <br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>2.2 Utiliza las partes de la estructura básica de un documento
                                                HTML.</label>
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
                                            <label>2.4 ¿Escriba el nombre de las etiquetas de una estructura básica para
                                                una página en
                                                HTML?</label>
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
                                            <h4>3. Crear códigos basado en JAVA </h4>
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
                                            <label>3.4 Haciendo uso de un ejemplo, escriba la función para imprimir en
                                                JAVA.</label>
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
                                            <h4>4. Establecer conexión con la base de datos.</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>4.1 Aplica el concepto y los tipos de datos en una Base de
                                                Datos.</label>
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
                                            <label>4.4 Escriba la consulta básica para insertar datos en una Base de
                                                Datos.</label>
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
                                            <h4>5. Identificar en un código fuente posibles errores y hacer las
                                                modificacciones.</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>5.1 Interpreta archivo de código fuente para la identificación de la
                                                estructura.</label>
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
                                            <label>5.3 Utiliza la técnica Debugging para la resolución de un
                                                problema.</label>
                                        </td>
                                        <td>
                                            <?php Components::generarRadios('respuesta19',5); ?>
                                            <br><br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label>5.4 Elabore un ejemplo utilizando sintaxis para documentar un
                                                proceso.</label>
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
                            Ahora ya puedes darle a boton finalizar pero antes, debemos asegurar que estas conforme con tus respuestas:
                        </p>
                        <div id="form-step-3" role="form" data-toggle="validator">
                            <div class="form-group">
                                <label for="terms">Estoy de acuerdo con mis respuestas</label>
                                <input type="checkbox" id="terms" data-error="Porfavor chequea la palomita para asegurarnos"
                                    required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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
        var btnFinish = $('<button></button>').text('Finalizar')
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