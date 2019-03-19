<?php 
require_once('Model.php');
class EstudianteModel extends Model  {
    public $id_estudiante;
    public $nombre;
    public $apellido;
    public $email;
    public $sexo;
    public $fecha_nacimiento;
    public $foto_url;
    public $activo;
    
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
		$this->query = "INSERT INTO estudiante (id_estudiante,nombre,apellido,email,sexo,fecha_nacimiento,foto_url,activo) VALUES (null, '$nombre', '$apellido', '$email','$sexo','$fecha_nacimiento', '$foto_url', $activo);";
        $this->set_query();
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $this->query = "SELECT * FROM estudiante";
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
		$this->query = "UPDATE estudiante SET nombre= '$nombre',apellido = '$apellido',email='$email',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento',foto_url='$foto_url',activo=$activo WHERE id_estudiante = $id_estudiante;";
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