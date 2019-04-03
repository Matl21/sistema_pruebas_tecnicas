<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
            <a class="nav-link" data-toggle="tab" href="#menu1">Etapa 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Etapa 4</a>
        </li>
        <li class="nav-item bg-danger text-white">
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
            <input type="text">
        </div>
        <div class="tab-pane container" id="menu2">...</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>