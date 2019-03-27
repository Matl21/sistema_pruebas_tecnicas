<?php 
require_once('./models/RolModel.php');
class RolController {
    private $model;
    
	public function __construct() {
		$this->model = new RolModel();
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
    
	public function delete( $id_rol = '' ) {
		return $this->model->delete($id_rol);
    }

    public function findById($id_rol = ''){
        return $this->model->findById($id_rol);
    }
    
	public function __destruct() {
		//unset($this);
	}
}