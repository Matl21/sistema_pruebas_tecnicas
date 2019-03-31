<?php 
require_once('./models/LoginModel.php');
class UsuariosController {
    private $model;
    
	public function __construct() {
		$this->model = new LoginModel();
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
    
	public function __destruct() {
		//unset($this);
	}
}