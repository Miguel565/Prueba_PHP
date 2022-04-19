<?php 
include 'componente/conexion.php';

/**
 * Clase que soporta el CRUD
 */
class PersonaContr {
    private $table = "personas";
    private $connect;
    
    /**
     * Contructor de la Clase PersonaContr
     */
    public function __construct() {
        $conexion = new Conexion();
        $this->connect = $conexion->getConexion(); 
    }

    /**
     * Metodo de consulta de datos especificos en la tabla personas
     * 
     * @param $datos parametro del metodo
     * 
     * @return $stmt devuelve una cadena de caracteres.
     */
    public function consultar($datos){
        $sql = "select * from ".$this->table." where passwrord = ?";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1,$datos->password);
        $stmt->execute();
        return $stmt;
    }
}
?>