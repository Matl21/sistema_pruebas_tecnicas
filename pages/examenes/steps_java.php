<?php
require_once('./class/Components.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prueba JAVA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-pills">
        <li class="nav-item">
            <a class="nav-link active animated heartBeat" data-toggle="tab" href="#home">Estudiante</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#home">Indicaciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Etapa 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Etapa 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu3">Etapa 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu4">Etapa 4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu5">Etapa 5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Finalizar</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active container" id="home">
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
        <div class="tab-pane container" id="menu1">
            <br />
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
                        <label>1.4 ¿Cuáles son las funciones que desempeñan los algoritmos en la resolución de
                            problemas?</label>
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

        <div class="tab-pane container" id="menu2">
            <br />
            <table class="table-responsive table-bordered table-striped">
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
                        <label>2.4 ¿Escriba el nombre de las etiquetas de una estructura básica para una página en
                            HTML?</label>
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

        <div class="tab-pane container" id="menu3">
            <br />
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
                        <label>3.4 Haciendo uso de un ejemplo, escriba la función para imprimir en JAVA.</label>
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

        <div class="tab-pane container" id="menu4">
            <br />
            <table class="table-responsive table-bordered table-striped">
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
            </table>
            <br />
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>

        <div class="tab-pane container" id="menu5">
            <br />
            <table class="table-responsive table-bordered table-striped">
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
            <br />
            <button class="btn btn-primary btn_center animated fadeInLeft">Siguiente <i
                    class="fas fa-arrow-right"></i></button>
        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>