<?php 
require_once('Model.php');
class UsuariosModel extends Model  {
    public $id_usuario;
    public $id_rol;
    public $username;
    public $password;
    private $nombre;
    
    //Metodo que inserta registros dentro de la base datos
    public function create( $datos = array() ) {
        try {
            foreach ($datos as $key => $value) {
                $$key = $value;
            }
            $this->query = "INSERT INTO usuarios (id_usuario,id_rol,username,password) VALUES (null, '$id_rol', '$username', MD5('$password'));";
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
            $this->query = "SELECT * FROM usuarios";
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
            $this->query = "UPDATE usuarios SET id_rol= '$id_rol',username = '$username',password=MD5('$password') WHERE id_usuario = $id_usuario;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_usuario = '' ) {
        try {
            $this->query = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
		    $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder eliminar el registro
            echo "No se pudo eliminar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_usuario = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario;";
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

    public function validate_user($username, $password){
        
        $data = array();
        try {
            $this->query = "SELECT * FROM usuarios WHERE username = '$username' AND password = MD5('$password');";
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

    public function userExists($username, $password){
        $data = array();
        try {
            $this->query = "SELECT * FROM usuarios WHERE username = '$username' AND password = MD5('$password');";
            $this->get_query();

            foreach ($this->rows as $key => $value) {
                array_push($data, $value);
            }
            if(count($data)>0){
                return true;
            }else{
                return false;
            }
        } catch (Exception $e) {
            //Mensaje de error al no poder obtener los registros
            echo "No se pudo obtener los datos: ".$e->errorMessage(); 
        }
    }

    public function setUser($username){
        try{
        $this->query = "SELECT * FROM usuarios WHERE username = '$username';";
        $this->get_query();
        foreach ($this->rows as $currentUser) {
            $this->nombre = $currentUser['username'];
            $this->username = $currentUser['username'];
        }
        } catch (Exception $e) {
        //Mensaje de error al no poder obtener los registros
        echo "No se pudo obtener los datos: ".$e->errorMessage(); 
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    //Metodo que se encarga de limpiar la variable this
	public function __destruct() {
		//unset($this);
    }
}
?>