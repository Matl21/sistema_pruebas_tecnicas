<?php 
require_once('./models/EstudianteModel.php');
class EstudianteController {
    private $model;
    
	public function __construct() {
		$this->model = new EstudianteModel();
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
    
	public function delete( $id_estudiante = '' ) {
		return $this->model->delete($id_estudiante);
    }

    public function findById($id_estudiante = ''){
    return $this->model->findById($id_estudiante);
    }
    
	public function __destruct() {
		//unset($this);
	}
}