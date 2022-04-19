<?php 

/**
 * Representa la clase responsable de establecer conexion
 * con la base de datos
 */
class Conexion{
    protected $host = "localhost";
    protected $dataBase = "prueba";
    protected $user = "root";
    protected $password = "";
    private $conectar = NULL;

    /**
     * Metodo a obtener conxion
     * 
     * @return Devuelve conexion con Mysql
     */
    public function getConexion(){
        try{
            $this->conectar = new PDO("mysql:host=".$this->host.";dbname=".$this->dataBase, $this->user, $this->password);
        }catch(Exception $ex){
            echo "Connection Error:" .$ex->getTraceAsString();
           echo "Connection Error:" .$ex->getMessage();
        }
        return $this->conectar;
    }
}
?>