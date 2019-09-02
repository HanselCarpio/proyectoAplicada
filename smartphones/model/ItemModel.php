<?php


class ItemModel {
//
//    //put your code here
//    protected $db;
//
//    public function __construct() {
//        require 'libs/SPDO.php';
//        $this->db = SPDO::singleton();
//    }
//
////constructor
//
//    public function listarMadera() {
//        $consulta = $this->db->prepare('call sp_listarMadera()');
//        $consulta->execute();
//        $resulado = $consulta->fetchAll();
//        $consulta->CloseCursor();
//        return $resulado;
//    }//listar
//    
//    
//    //método para registar en la bd
//    public function registrar($madera) {
//        $consulta = $this->db->prepare("call sp_ingresar(?,?)");
//        $consulta->execute(array($madera->getNombre(), $madera->getPrecio()));
//        $consulta->closeCursor();
//    }
//    
//    public function registrarAcabados($acabados) {
//        $consulta = $this->db->prepare("call sp_ingresarAcabados(?,?)");
//        $consulta->execute(array($acabados->getTipo(), $acabados->getCosto()));
//        $consulta->closeCursor();
//    }
//    
//    public function registrarClientes($clientes) {
//        $consulta = $this->db->prepare("call sp_ingresarCliente(?,?,?)");
//        $consulta->execute(array($clientes->getCodigo(), $clientes->getNombre(), $clientes->getDireccion()));
//        $consulta->closeCursor();
//    }
//    
//    public function registrarMueble($mueble) {
//        $consulta = $this->db->prepare("call sp_ingresarMueble(?,?,?,?,?,?,?,?)");
//        $consulta->execute(array($mueble->getCodigoMueble(), $mueble->getNombre(), $mueble->getMadera(), $mueble->getPulgada(), $mueble->getAcabado(), $mueble->getCm(), $mueble->getCosto(), $mueble->getCodAN()));
//        $consulta->closeCursor();
//    }
//
//    public function actualizar($persona) {
//        $consulta = $this->db->prepare("call sp_actualizar(?,?,?,?)");
//        $consulta->execute(array($persona->getCedula(), $persona->getNombre(), $persona->getPrecio(),
//                    $persona->getEdad()));
//        $consulta->closeCursor();
//    }
//
//
//    public function borrar($persona) {
//        $consulta = $this->db->prepare("call sp_borrar(?)");
//        $consulta->execute(array($persona->getCedula()));
//        $consulta->closeCursor();
//    }

}
