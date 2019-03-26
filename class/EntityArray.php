<?php
class EntityArray{
    public static function estudianteArray($id_estudiante,$nombre,$apellido,$email,$sexo,$fecha,$foto_url,$activo){
        $datos = array(
            'id_estudiante' => $id_estudiante,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email' => $email,
            'sexo' => $sexo,
            'fecha_nacimiento' => $fecha,
            'foto_url' => $foto_url,
            'activo' => $activo
        );
        return $datos;
    }
}

?>