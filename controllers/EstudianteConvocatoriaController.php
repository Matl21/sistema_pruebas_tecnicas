<?php 
require_once('./models/EstudianteConvocatoriaModel.php');
class EstudianteConvocatoriaController {
    private $model;
    
	public function __construct() {
		$this->model = new EstudianteConvocatoriaModel();
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
    
	public function delete( $id_estudianteconvocatoria = '' ) {
		return $this->model->delete($id_estudianteconvocatoria);
    }

    public function findById($id_estudianteconvocatoria = ''){
        return $this->model->findById($id_estudianteconvocatoria);
    }
    
	public function __destruct() {
		//unset($this);
	}
}