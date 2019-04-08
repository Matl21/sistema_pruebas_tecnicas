<?php 
require_once('./models/UsuariosModel.php');
class UsuariosController {
    private $model;
    
	public function __construct() {
		$this->model = new UsuariosModel();
    }
    
	public function create( $datos = array() ) {
		return $this->model->create($datos);
    }
    
	public function read() {
		return $this->model->read();
    }
    
	public function update( $datos = array() ) {
		return $this->model->update($datos);
    }
    
	public function delete( $id_usuario = '' ) {
		return $this->model->delete($id_usuario);
    }

  public function findById($id_usuario = ''){
    return $this->model->findById($id_usuario);
		}

	public function userExists($user, $pass){
		return $this->model->userExists($user, $pass);
	}

	public function setUser($username){
	}

	public function getNombre(){
		return $this->nombre;
	}
    
	public function __destruct() {
		//unset($this);
	}
}