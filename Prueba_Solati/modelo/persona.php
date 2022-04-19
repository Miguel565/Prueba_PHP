<?php
class Persona{
    public $usuario;
    public $password;
    
    /**
     * Se crea una instancia de la clase Persona
     * 
     * @param $usuario Primer parametro del constructor
     * @param $password Segundo parametro del constructor
     */
    public function __construct($usuario, $password) {
        $this->usuario = $usuario;
        $this->password = $password;
    }
}
?>