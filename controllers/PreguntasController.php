<?php 
require_once('./models/PreguntasModel.php');
class PreguntasController {
    private $model;
    
	public function __construct() {
		$this->model = new PreguntasModel();
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
    
	public function delete( $id_preguntas = '' ) {
		return $this->model->delete($id_preguntas);
    }

    public function findById($id_preguntas = ''){
        return $this->model->findById($id_preguntas);
    }
    
	public function __destruct() {
		//unset($this);
	}
}