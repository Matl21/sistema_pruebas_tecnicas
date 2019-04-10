<?php 
require_once('Model.php');
class EstudianteModel extends Model  {
    public $id_estudiante;
    public $nombre;
    public $apellido;
    public $email;
    public $sexo;
    public $fecha_nacimiento;
    public $foto_url;
    public $activo;
    
    //Metodo que inserta registros dentro de la base datos
    public function create( $datos = array() ) {
        try {
            foreach ($datos as $key => $value) {
                //Crear variables de dinamicas con los datos de arreglo recibido
                $$key = $value;
            }
            $this->query = "INSERT INTO estudiante (id_estudiante,nombre,apellido,email,sexo,fecha_nacimiento,foto_url,activo) VALUES (null, '$nombre', '$apellido', '$email','$sexo','$fecha_nacimiento', '$foto_url', $activo);";
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
            $this->query = "SELECT * FROM estudiante";
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
                //Crear variables de dinamicas con los datos de arreglo recibido
                $$key = $value;
            }
            $this->query = "UPDATE estudiante SET nombre= '$nombre',apellido = '$apellido',email='$email',sexo='$sexo',fecha_nacimiento='$fecha_nacimiento',foto_url='$foto_url',activo=$activo WHERE id_estudiante = $id_estudiante;";
            $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder actualizar el registro
            echo "No se pudo actualizar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de eliminar un registro de la base de datos
	public function delete( $id_estudiante = '' ) {
        try {
            $this->query = "DELETE FROM estudiante WHERE id_estudiante = $id_estudiante";
		    $this->set_query();
        } catch (Exception $e) {
            //Mensaje de error al no poder eliminar el registro
            echo "No se pudo eliminar los datos: ".$e->errorMessage(); 
        }
    }

    //Metodo que se encarga de obtener el registro en base al ID
    public function findById($id_estudiante = ''){
        $data = array();
        try {
            $this->query = "SELECT * FROM estudiante WHERE id_estudiante = $id_estudiante;";
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

    
    
//Metodo que se encarga de obtener el registro en base al ID
public function revisionEstudiantes(){
    $data = array();
    try {
        $this->query = "SELECT e.id_estudiante,e.nombre,e.apellido FROM estudiante e INNER JOIN respuestas r ON e.id_estudiante=r.id_estudiante GROUP BY e.id_estudiante;";
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

    //Metodo que se encarga de limpiar la variable this
	public function __destruct() {
		//unset($this);
    }
}
?>