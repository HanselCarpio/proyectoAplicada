<?php

class TiendaModel {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }//Fin del constructor.
    
    public function verificaSesion($nombreUsuario, $password){
        $consulta = $this->db->prepare("call sp_verificarSesion('$nombreUsuario', '$password')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función verificaSesion.
   
    public function actualizarCuenta($nombreUsuario, $nuevoUsuario, $password){
        $consulta = $this->db->prepare("call sp_actualizarCuenta('$nombreUsuario','$nuevoUsuario', '$password')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función cambiarDatosCuenta.
    
    public function registrarAdministrador($nombreUsuario, $password){
        $consulta = $this->db->prepare("call sp_agregarAdministrador('$nombreUsuario', '$password')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función registrarAdministrador.
    
    public function registrarArticulo($nombre, $precio, $descripcion, $cantidad, $destino){
        $consulta = $this->db->prepare("call sp_registrarArticulo('$nombre', '$precio', '$descripcion', '$cantidad', '$destino')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la funcion registrarArticulo.
    
    public function obtenerArticulos($dato, $nombreUsuario){
        $consulta = $this->db->prepare("call sp_obtenerArticulos($dato,'$nombreUsuario')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función verificaSesion.
    
    public function obtenerArticulo($nombre){
        $consulta = $this->db->prepare("call sp_obtenerArticulo('$nombre')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función obtenerArticulo.
    
    public function actualizarArticulo($nombre, $precio, $descripcion, $cantidad, $destino){
        $consulta = $this->db->prepare("call sp_actualizarArticulo('$nombre', '$precio', '$descripcion', '$cantidad', '$destino')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función actualizarArticulo.
    
    public function registrarProductoFavorito($nombreProducto, $nombreCliente){
        $consulta = $this->db->prepare("call sp_agregarFavorito('$nombreProducto', '$nombreCliente')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función registrarProductoFavorito.
    
    public function agregarVisto($nombreProducto, $nombreUsuario){
        $consulta = $this->db->prepare("call sp_agregarVisto('$nombreProducto', '$nombreUsuario')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función agregarVisto.
    
    public function obtenerArticulos2($nombreUsuario, $dato){
        $consulta = $this->db->prepare("call sp_obtenerArticulos2('$nombreUsuario', $dato)");
        $consulta->execute();
        return $consulta;
    }//Fin de la función obtenerFavoritos
    
    public function insertarPromocion($idPromocion, $descuento, $fechaInicio, $fechaFin){
        $consulta = $this->db->prepare("call sp_insertarPromocion($idPromocion, $descuento, '$fechaInicio', '$fechaFin')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función insertarPromocion.
    
    public function obtenerDatosVinculacion(){
        $consulta = $this->db->prepare("call sp_obtenerDatosVinculacion()");
        $consulta->execute();
        return $consulta;
    }//Fin de la función obtenerDatosVinculacion.
    
    public function aniadirPromocionArticulo($nombreArticulo, $idPromocion){
        $consulta = $this->db->prepare("call sp_aniadirPromocionArticulo('$nombreArticulo', $idPromocion)");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función añadirPromocionArticulo.
    
    public function obtenerPromociones(){
        $consulta = $this->db->prepare("call sp_obtenerPromociones()");
        $consulta->execute();
        return $consulta;
    }//Fin de la función obtenerPromociones.
    
    public function anadirCarrito($nombreProducto, $nombreUsuario, $cantidad){
        $consulta = $this->db->prepare("call sp_agregarCarrito('$nombreProducto', '$nombreUsuario', '$cantidad')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función añadirCarrito.
    
    public function comprarProducto($nombreProducto, $nombreUsuario){
        $consulta = $this->db->prepare("call sp_comprarProducto('$nombreProducto', '$nombreUsuario')");
        $consulta->execute();
        return $consulta;
    }//Fin de la función comprarProducto.
    
    public function registroGastos($descripcion, $monto, $fechaFacturacion){
        $consulta = $this->db->prepare("call sp_registroGastos('$fechaFacturacion', '$descripcion', $monto)");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//Fin de la función insertarPromocion.
    
}//Fin de la clase ItemsModel
?>