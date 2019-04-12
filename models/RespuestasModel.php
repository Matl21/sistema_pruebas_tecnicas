<?php 
require_once('Model.php');
class RespuestasModel extends Model  {
    public $id_respuesta;
    public $id_pregunta;
    public $id_estudiante;
    public $respuesta;
    public $fecha;
    public $abierta;
    public $valoracion;
    public $revision;

    public $titulo;
   
    //Metodo constructor de la clase
	public function __construct() {
		$this->db_name = 'pruebastecnicas';
    }
    
    //Metodo que inserta registros dentro de la base datos
    public function create( $datos = array() ) {
        try {
            foreach ($datos as $key => $value) {
                $$key = $value;
            }
            $this->query = "INSERT INTO respuestas (id_respuesta,id_pregunta,id_estudiante,respuesta,fecha,abierta,valoracion,revision) VALUES (null, '$id_pregunta', '$id_estudiante', '$respuesta','$fecha','$abierta','$valoracion','$revision');";
            $this->set_query();
        }  catch (Exception $e) {
            //Mensaje de error al no poder crear el registro
            echo "No se pudo crear el registro: ".$e->errorMessage(); ;
        }
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $data = array();
        try {
            $this->query = "SELECT * FROM respuestas";
        $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener los datos: ".$e->errorMessage();
        }
        return $data;
    }
    
    //Metodo que actualiza un registro dentro de la base de datos
    public function update( $datos = array() ) {
        try {
            foreach ($datos as $key => $value) {
                $$key = $value;
            }
            $this->query = "UPDATE respuestas SET id_respuesta= '$id_respuesta',id_pregunta = '$id_pregunta',id_estudiante='$id_estudiante',respuesta='$respuesta',fecha='$fecha',abierta='$abierta',valoracion='$valoracion', revision='$revision' WHERE id_respuesta = $id_respuesta;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_respuesta = '' ) {
        try {
            $this->query = "DELETE FROM respuestas WHERE id_respuesta = $id_respuesta";
		    $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder eliminar el registro
            echo "No se pudo eliminar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_respuesta = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM respuestas WHERE id_respuesta = $id_respuesta;";
            $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener el registro buscado: ".$e->errorMessage(); 
        }
        return $data;
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function preguntasRespuestas($id_estudiante = ''){
        $data = array();
        try {
            $this->query = "SELECT r.id_respuesta,p.id_pregunta,p.titulo,r.respuesta FROM respuestas r INNER JOIN preguntas p ON r.id_pregunta = p.id_pregunta WHERE id_estudiante = $id_estudiante;";
            $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener el registro buscado: ".$e->errorMessage(); 
        }
        return $data;
    }

    public function valoracionRespuestas($id_estudiante = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM respuestas r INNER JOIN preguntas p ON r.id_pregunta = p.id_pregunta WHERE r.id_estudiante = $id_estudiante AND r.abierta = true AND r.revision=false;";
            $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener el registro buscado: ".$e->errorMessage(); 
        }
        return $data;
    }

    public function valoracionUpdate($id_respuesta = '', $valoracion = ''){
        try {
            $this->query = "UPDATE respuestas SET valoracion=$valoracion, revision=true WHERE id_respuesta=$id_respuesta;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    public function reportesRespuestas(){
        $data = array();
        try {
            $this->query = "SELECT * FROM respuestas r INNER JOIN estudiante e ON r.id_estudiante = e.id_estudiante GROUP BY r.id_estudiante;";
            $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener el registro buscado: ".$e->errorMessage(); 
        }
        return $data;
    }

    public function generarReportes($id_estudiante = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM respuestas r INNER JOIN estudiante e ON e.id_estudiante = r.id_estudiante INNER JOIN preguntas p ON p.id_pregunta = r.id_pregunta  INNER JOIN convocatoria c ON c.id_convocatoria = p.id_convocatoria where r.id_estudiante=$id_estudiante;";
            $this->get_query();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener el registro buscado: ".$e->errorMessage(); 
        }
        return $data;
    }

    //Metodo que se encarga de limpiar la variable this
	public function __destruct() {
		//unset($this);
    }
}
?>