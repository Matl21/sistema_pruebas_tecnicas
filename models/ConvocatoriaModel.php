<?php 
require_once('Model.php');
class ConvocatoriaModel extends Model  {
    public $id_convocatoria;
    public $nombre;
    public $descripcion;
   
    
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
		$this->query = "INSERT INTO convocatoria (id_convocatoria,nombre,descripcion) VALUES (null, '$nombre', '$descripcion');";
        $this->set_query();
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $this->query = "SELECT * FROM convocatoria";
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
		$this->query = "UPDATE convocatoria SET nombre= '$nombre',descripcion = '$descripcion' WHERE id_convocatoria = $id_convocatoria;";
		$this->set_query();
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_convocatoria = '' ) {
		$this->query = "DELETE FROM convocatoria WHERE id_convocatoria = $id_convocatoria";
		$this->set_query();
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_convocatoria = ''){
        $this->query = "SELECT * FROM convocatoria WHERE id_convocatoria = $id_convocatoria;";
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