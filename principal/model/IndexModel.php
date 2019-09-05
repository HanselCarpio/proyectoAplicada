<?php

class IndexModel {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }//Fin del constructor.

    public function insertarUsuario($nombre, $apellidos, $edad, $genero, $nombreUsuario, $correo, $pass,$numeroCuenta){
        $consulta = $this->db->prepare("call sp_registrar('$nombre', '$apellidos', $edad, '$genero', '$nombreUsuario', '$correo', '$pass', '$numeroCuenta')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función InsertarReparacion.
    
    public function verificaSesion($nombreUsuario, $password){
        $consulta = $this->db->prepare("call sp_verificarSesion('$nombreUsuario', '$password')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función verificaSesion.

}//Fin de la clase ItemsModel
?>