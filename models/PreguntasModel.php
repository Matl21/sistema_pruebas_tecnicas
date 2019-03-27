<?php 
require_once('Model.php');
class PreguntasModel extends Model  {
    public $id_pregunta;
    public $id_convocatoria;
    public $titulo;
    public $descripcion;
    public $etapa;
    public $fecha_creacion;
    public $activo;
    
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
            $this->query = "INSERT INTO preguntas (id_pregunta,id_convocatoria,titulo,descripcion,etapa,fecha_creacion,activo) VALUES (null, '$id_pregunta', '$id_convocatoria', '$titulo','$descripcion','$etapa', '$fecha_creacion', $activo);";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder crear el registro
            echo "No se pudo crear el registro: ".$e->errorMessage(); ;
        }
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $data = array();
        try {
            $this->query = "SELECT * FROM preguntas";
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
            $this->query = "UPDATE preguntas SET id_pregunta= '$id_pregunta',id_convocatoria = '$id_convocatoria',titulo='$titulo',descripcion='$descripcion',etapa='$etapa',fecha_creacion='$fecha_creacion',activo=$activo WHERE id_preguntas = $id_preguntas;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_preguntas = '' ) {
        try {
            $this->query = "DELETE FROM preguntas WHERE id_pregunta = $id_pregunta";
		    $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder eliminar el registro
            echo "No se pudo eliminar los datos: ".$e->errorMessage(); 
        }
		
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_pregunta = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM preguntas WHERE id_pregunta = $id_pregunta;";
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