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
	
	public function findByRange($inicio, $maxResult){
		return $this->model->findByRange($inicio, $maxResult);
		}
	
	public function countRegistros(){
			return $this->model->countRegistros();
		}
	public function	preguntasPorConvocatoria($id_convocatoria = ''){
			return $this->model->preguntasPorConvocatoria($id_convocatoria);
		}
    
	public function __destruct() {
		//unset($this);
	}
}