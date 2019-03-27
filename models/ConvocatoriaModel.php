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
        try {
            foreach ($datos as $key => $value) {
                $$key = $value;
            }
            $this->query = "INSERT INTO convocatoria (id_convocatoria,nombre,descripcion) VALUES (null, '$nombre', '$descripcion');";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder crear el registro
            echo "No se pudo crear el registro: ".$e->errorMessage(); 
        }
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $data = array();
        try {
            $this->query = "SELECT * FROM convocatoria";
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
            $this->query = "UPDATE convocatoria SET nombre= '$nombre',descripcion = '$descripcion' WHERE id_convocatoria = $id_convocatoria;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_convocatoria = '' ) {
        try {
            $this->query = "DELETE FROM convocatoria WHERE id_convocatoria = $id_convocatoria";
		    $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder eliminar el registro
            echo "No se pudo eliminar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_convocatoria = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM convocatoria WHERE id_convocatoria = $id_convocatoria;";
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