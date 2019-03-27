<?php 
require_once('Model.php');
class RespuestasModel extends Model  {
   
    public $id_respuesta;
    public $id_pregunta;
    public $id_estudiante;
    public $respuesta;
    public $descripcion;
    public $valoracion;
   
    //Metodo constructor de la clase
	public function __construct() {
		$this->db_name = 'pruebastecnicas';
    }
    
    //Metodo que inserta registros dentro de la base datos
    public function create( $datos = array() ) {
		foreach ($datos as $key => $value) {
            $$key = $value;
            //echo "key: $key value: $value<br/>";
        }
		$this->query = "INSERT INTO respuestas (id_respuesta,id_pregunta,id_estudiante,respuesta,descripcion,valoracion) VALUES (null, '$id_pregunta', '$id_estudiante', '$respuesta','$descripcion','$valoracion');";
        $this->set_query();
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $this->query = "SELECT * FROM respuestas";
        $this->get_query();

        $data = array();
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        return $data;
    }
    
    //Metodo que actualiza un registro dentro de la base de datos
    public function update( $datos = array() ) {
		foreach ($datos as $key => $value) {
			$$key = $value;
		}
		$this->query = "UPDATE respuestas SET id_respuesta= '$id_respuesta',id_pregunta = '$id_pregunta',id_estudiante='$id_estudiante',respuesta='$respuesta',descripcion='$descripcion',valoracion='$valoracion' WHERE id_respuesta = $id_estudiante;";
		$this->set_query();
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_respuestas = '' ) {
		$this->query = "DELETE FROM respuestas WHERE id_respuesta = $id_respuesta";
		$this->set_query();
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_respuestas = ''){
        $this->query = "SELECT * FROM respuestas WHERE id_respuesta = $id_respuesta;";
        $this->get_query();

        $data = array();
        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }
        return $data;
    }
    
    //Metodo que se encarga de limpiar la variable this
	public function __destruct() {
		//unset($this);
    }
}
?>