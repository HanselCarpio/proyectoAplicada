<?php
class ProdModel {
    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }//constructor
   
    public function  insertarProducto($nombre,$precio,$estado,$descripcion,$imagen,$cantidad){
        $consulta = $this->db->prepare("call  sp_insertar_producto('$nombre', '$precio','$estado','$descripcion','$imagen','$cantidad')");
        $consulta->execute();
        $resultado = $consulta->rowCount();
        return $resultado;
    }//obtenerRepuesto
    
    public function  obtenerCarrito($usuario){
        $consulta = $this->db->prepare("call  sp_obtener_carrito('$usuario')");
        $consulta->execute();
        return $consulta;
    }
    public function  pagarCarrito($usuario){
        $consulta = $this->db->prepare("call  sp_pagar_carrito('$usuario')");
        $consulta->execute();
        $consulta->CloseCursor();
        return $consulta;
    }
    public function  obtenerProductos(){
        $consulta = $this->db->prepare("call  sp_obtener_producto()");
        $consulta->execute();
        return $consulta;
    }
     public function  obtenerFacturaProductos($usuario){
        $consulta = $this->db->prepare("call  sp_obtener_factura_producto('$usuario')");
        $consulta->execute();
        return $consulta;
    }
    public function  agregarCarro($id,$usuario){
        $consulta = $this->db->prepare("call sp_agregar_carrito ('$id','$usuario')");
        $consulta->execute();
        return $consulta;
    }
     
     public function  crearCategoria($categoria){
        
        $consulta = $this->db->prepare("call  sp_registrar_categoria('$categoria')");
        $consulta->execute();
        $consulta->CloseCursor();
        
        return $consulta;
    }
    public function  obtenerCategoria(){
        
        $consulta = $this->db->prepare("call  sp_listar_categoria()");
        $consulta->execute();
        $consulta->CloseCursor();
        
        return $consulta;
    }

}//class
