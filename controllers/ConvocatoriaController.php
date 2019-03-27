<?php 
require_once('./models/ConvocatoriaModel.php');
class ConvocatoriaController {
    private $model;
    
	public function __construct() {
		$this->model = new ConvocatoriaModel();
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
    
	public function delete( $id_convocatoria = '' ) {
		return $this->model->delete($id_convocatoria);
    }

    public function findById($id_convocatoria = ''){
        return $this->model->findById($id_convocatoria);
    }
    
	public function __destruct() {
		//unset($this);
	}
}