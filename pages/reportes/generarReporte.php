<?php

require_once __DIR__ . './mpdf/vendor/autoload.php';
require_once('./../../models/RespuestasModel.php');

if (isset($_GET['id_estudiante'])) {
    $respuestasModel = new RespuestasModel;
    $reportes = $respuestasModel->generarReportes($_GET['id_estudiante']);


$html .= '<h4 class="cont-center" >EVALUACIÓN INICIAL</h4><img src="mpdf/fundacion.png" width="50" />';
$html .= "<table>
<tr>
<td class='col1'>Nombre del centro de formación:</td>
<th class='col2'>Fundación Gloria de Kriete</th>
</tr>
<tr>
<td class='col1'>Título de la capacitación:</td>
<th class='col2'>".$reportes[0]['convocatoria']."</th>
</tr>
<tr>
<td class='col1'>Nombre del participante: </td>
<th class='col2'>".$reportes[0]['participante']."</th>
</tr>
<tr>
<td class='col1'>Fecha de realización de la prueba:</td>
<th class='col2'>".$reportes[0]['fecha']."</th>
</tr>
<tr>
<td class='col1'>Municipio:</td>
<th class='col2'>Santa Ana</th>
</tr>
<tr>
<td class='col1'>Sexo:</td>
<th class='col2'>".$reportes[0]['sexo']."</th>
</tr>
</table>";


$html .= '<h4>Indicaciones</h4>';
$html .= '<p>Complete el cuestionario atendiendo las tres indicaciones que se describen a continuación:</p>';
$html .= '<p>A) La prueba consiste en una serie de afirmaciones y preguntas derivadas de criterios de
evaluación
seleccionados a partir del programa de formación. Lea cuidadosamente cada una de las
afirmaciones y utilice la
siguiente escala para dar su valoración.</p>';
$html .= '<p>B) Utilice la siguiente “escala de valoración” de acuerdo con sus conocimientos y
experiencias:</p>';
$html .= '1. No conozco ni se hacerlo. <br/>
2. Conozco, pero no sé hacerlo. <br/>
3. Sé hacerlo empíricamente <br/>
4. Conozco y tengo algún dominio, pero no lo práctico. <br/>
5. Conozco, sé hacerlo y lo practico <br/>';
$html .= '<p>Cuando complete el cuestionario, por favor, marque con el símbolo (√), el número de la opción
seleccionada. Note
que solo puede hacer una elección por pregunta. Observe además que cambia el orden de los
números de la escala
de una fila a la siguiente.</p>';
$html .= '<p>C) Responda las preguntas abiertas que aparecen planteadas al final de cada bloque de
afirmaciones, expresando
sus ideas en forma sintética y clara.<p/>';
$html .='<h4>Criterios e Indicadores o aspectos a evaluar:</h4>';
$html .= '<table>
            <tr>
                <td class="cont-center" >N°</td>
                <td class="cont-center" >Pregunta</td>
                <td class="cont-center" >Repuesta</td>
            </tr>';
$c=1;
$total=0;
for ($i=0; $i <count($reportes) ; $i++) { 
$html .= "
<tr>
<td class='cont-center'>". ($i+1) ."</td>
<td>". $reportes[$i]['titulo'] ."</td>";
if ($c!=4) {
    $html .="<td class='cont-center'>". $reportes[$i]['respuesta'] ."</td>";
    $total += $reportes[$i]['respuesta'];
}
else{
    $html .="<td class='cont-center'>". $reportes[$i]['valoracion'] ."</td>";
    $total += $reportes[$i]['valoracion'];
    $c=0;
}
$html .="</tr>";
$c++;
}
$html .= "<tr>
<td></td>
<td class='cont-center total'><h4>TOTAL</h4></td>
<td class='cont-center total'><h4>$total</h4></td>
</tr>";
$html .= '</table>';

}
else{
    $html .= "<h2>Has hackeado la NASA :O</h2>";
}

    //echo $html;
    $mpdf = new \Mpdf\Mpdf([
        'default_font_size' => 11,
        'default_font' => 'dejavusans'
    ]);
$stylesheet = file_get_contents('mpdf/style.css'); // external css
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html,2);
$mpdf->Output();

?>