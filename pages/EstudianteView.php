<?php
require_once('../controllers/EstudianteController.php');

echo "<h1>Mantenimiento a Estudiantes</h1>";

$estudianteModel = new EstudianteController();

//Llenado del arreglo
$estudientes= $estudianteModel->findById(1);

echo "
<table>
<tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Email</th>
    <th>Sexo</th>
    <th>Fecha Nacimiento</th>
    <th>Foto</th>
    <th>Activo</th>
</tr>";
for ($i=0; $i <count($estudientes) ; $i++) { 
echo "
<tr>
<td>". $estudientes[$i]['id_estudiante'] ."</td>
<td>". $estudientes[$i]['nombre'] ."</td>
<td>". $estudientes[$i]['apellido'] ."</td>
<td>". $estudientes[$i]['email'] ."</td>
<td>". $estudientes[$i]['sexo'] ."</td>
<td>". $estudientes[$i]['fecha_nacimiento'] ."</td>
<td>". $estudientes[$i]['foto_url'] ."</td>
<td>". $estudientes[$i]['activo'] ."</td>
</tr>";
}
echo "</table>";

$new_status = array(
	'id_estudiante' => 5,
    'nombre' => 'Georgina',
    'apellido' => 'Sisneros',
    'email' => 'sisteros.georgina@algo.com',
    'sexo' => 'Femenino',
    'fecha_nacimiento' => '1985-02-12',
    'foto_url' => null,
    'activo' => true
);

//$status->create($new_status);

//$estudianteModel->create($new_status);
//$estudianteModel->update($new_status);
?>