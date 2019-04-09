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

    public static function rolArray($id_rol,$nombre,$descripcion){
        $datos = array(
            'id_rol' => $id_rol,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
        );
        return $datos;
    }
    public static function respuestasArray($id_respuesta,$id_pregunta,$id_estudiante,$respuesta,$fecha,$abierta,$valoracion,$revision){
        $datos = array(
            'id_respuesta' => $id_respuesta,
            'id_pregunta' => $id_pregunta,
            'id_estudiante' => $id_estudiante,
            'respuesta' => $respuesta,
            'fecha' => $fecha,
            'abierta' => $abierta,
            'valoracion' => $valoracion,
            'revision' => $revision
        );
        return $datos;
    }

    public static function estudianteConvocatoriaArray($id_estudiante_convocatoria,$id_convocatoria,$id_estudiante,$municipio,$lugar){
        $datos = array(
            'id_estudiante_convocatoria' => $id_estudiante_convocatoria,
            'id_convocatoria' => $id_convocatoria,
            'id_estudiante' => $id_estudiante,
            'municipio' => $municipio,
            'lugar' => $lugar,
        );
        return $datos;
    }

    public static function convocatoriaArray($id_convocatoria,$nombre,$descripcion){
        $datos = array(
            'id_convocatoria' => $id_convocatoria,
            'nombre' => $nombre,
            'descripcion' => $descripcion,
        );
        return $datos;
    }

    public static function preguntasArray($id_pregunta,$id_convocatoria,$titulo,$descripcion,$etapa,$fecha_creacion,$activo){
        $datos = array(
            'id_pregunta' => $id_pregunta,
            'id_convocatoria' => $id_convocatoria,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'etapa' => $etapa,
            'fecha_creacion' => $fecha_creacion,
            'activo' => $activo
        );
        return $datos;
    }

    public static function usuariosArray($id_usuario,$id_rol,$username,$password){
        $datos = array(
            'id_usuario' => $id_usuario,
            'id_rol' => $id_rol,
            'username' => $username,
            'password' => $password
        );
        return $datos;
    }
}
?>