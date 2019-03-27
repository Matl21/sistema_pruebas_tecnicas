<?php 
require_once('Model.php');
class LoginModel extends Model  {
    public $id_usuario;
    public $id_rol;
    public $username;
    public $password;
    
    //Metodo que inserta registros dentro de la base datos
    public function create( $datos = array() ) {
        try {
            $this->query = "INSERT INTO login (id_usuario,id_rol,username,password) VALUES (null, '$id_rol', '$username', '$password');";
            $this->set_query();
            foreach ($datos as $key => $value) {
                $$key = $value;
            }
        } catch (Exception $e) {
            //Mensaje de error al no poder crear el registro
            echo "No se pudo crear el registro: ".$e->errorMessage(); 
        }
    }
    
    //Metodo que obtine los registros de la base de datos
    public function read(){
        $data = array();
        try {
            $this->query = "SELECT * FROM login";
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
            $this->query = "UPDATE login SET id_rol= '$id_rol',username = '$username',password='$password' WHERE id_login = $id_login;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_login = '' ) {
        try {
            $this->query = "DELETE FROM login WHERE id_login = $id_login";
		    $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder eliminar el registro
            echo "No se pudo eliminar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_login = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM login WHERE id_login = $id_login;";
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