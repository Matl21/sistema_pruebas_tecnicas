<?php 
require_once('Model.php');
class EstudianteConvocatoriaModel extends Model  {
    public $id_convocatoria;
    public $id_estudiante;
    public $municipio;
    public $lugar;
    
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
            $this->query = "INSERT INTO  estudiante_convocatoria (id_convocatoria,id_estudiante,municipio,lugar) VALUES ($id_convocatoria, '$id_estudiante', '$municipio', '$lugar');";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder crear el registro
            echo "No se pudo crear el registro: ".$e->errorMessage(); 
        }
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $this->query = "SELECT * FROM estudiante_convocatoria";
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
		$this->query = "UPDATE estudiante_convocatoria SET id_convocatoria= '$id_convocatoria',id_estudiante = '$id_estudiante',municipio='$municipio',lugar='$lugar' WHERE id_convocatoria = $id_convocatoria;";
		$this->set_query();
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_estudiante = '' ) {
		$this->query = "DELETE FROM estudiante WHERE id_estudiante = $id_estudiante";
		$this->set_query();
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_estudiante = ''){
        $this->query = "SELECT * FROM estudiante WHERE id_estudiante = $id_estudiante;";
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