<?php 
require_once('./models/RespuestasModel.php');
class RespuestasController {
    private $model;
    
	public function __construct() {
		$this->model = new RespuestasModel();
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
    
	public function delete( $id_respuestas = '' ) {
		return $this->model->delete($id_respuestas);
    }

    public function findById($id_respuestas = ''){
    return $this->model->findById($id_respuestas);
		}
	
		public function preguntasRespuestas($id_estudiante = ''){
			return $this->model->preguntasRespuestas($id_estudiante);
		}
		public function valoracionRespuestas($id_estudiante = ''){
			return $this->model->valoracionRespuestas($id_estudiante);
		}

		public function valoracionUpdate($id_respuesta = '', $valoracion = ''){
			return $this->model->valoracionUpdate($id_respuesta, $valoracion);
		}
    
	public function __destruct() {
		//unset($this);
	}
}