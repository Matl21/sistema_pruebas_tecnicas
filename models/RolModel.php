<?php 
require_once('Model.php');
class RolModel extends Model  {
    public $id_rol;
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
		$this->query = "INSERT INTO rol (id_rol,nombre,descripcion) VALUES (null, '$nombre', '$descripcion');";
        $this->set_query();
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $this->query = "SELECT * FROM rol";
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
		$this->query = "UPDATE rol SET nombre= '$nombre',descripcion = '$descripcion', WHERE id_rol = $id_rol;";
		$this->set_query();
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_rol = '' ) {
		$this->query = "DELETE FROM rol WHERE id_rol = $id_rol";
		$this->set_query();
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_rol = ''){
        $this->query = "SELECT * FROM rol WHERE id_rol = $id_rol;";
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