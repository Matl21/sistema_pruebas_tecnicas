<?php
abstract class Model {
    //Atrivutos
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
    private static $db_name = 'pruebastecnicas';
    private static $db_charset = 'utf8';
    private $conn;
    protected $query;
    protected $rows = array();

    //Metodos
    //Metdos abstractos para opereaciones CRUD
    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();

    //Método privado para conectarse a la base de datos
    private function db_open(){
        try {
            $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);
            $this->conn->set_charset(self::$db_charset);
        } catch (mysqli_sql_exception $e) {
            // Cerrando conexión en caso de error y lanzando mensaje de debug
		    die("Error de conexión: " . $e->getMessage() . " en la línea " . $e->getLine());
        }
        
    }

    //Método privado para desconectarse de la base de datos
    private function db_close(){
        try {
            $this->conn->close();
        } catch (Exception $e) {
            //Mensaje de error al no poder cerrar la conexion
            die("Error no se pudo cerrar la conexion: " . $e->getMessage() . " en la línea " . $e->getLine());
        }
    }

    //Ejecutar un query simple del tipo CUD
    protected function set_query(){
        try {
            $this->db_open();
            $this->conn->query($this->query);
		    $this->db_close();
        } catch (Exception $e) {
            //Mensaje de error al poder ejecutar la query
            die("Error de no se pudo ejecutar la query: " . $e->getMessage() . " en la línea " . $e->getLine());
        }
        
    }

    //Obtener los resultados de una query en un array
    protected function get_query(){
        try {
            $this->db_open();
            $result = $this->conn->query($this->query);
            while( $this->rows[] = $result->fetch_assoc() );
		    $result->close();
            $this->db_close();
            return array_pop($this->rows);
        } catch (Exception $e) {
            //Mensaje de error al obtener los datos de la consulta
            die("Error de no se pudo obtener los datos de la consulta: " . $e->getMessage() . " en la línea " . $e->getLine());
        }
        
    }
}
?>