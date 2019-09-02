<?php

class CategoriaModel {
//
    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }


    public function registrar($nombre) {

            $consulta = $this->db->prepare('call sp_insertarCategoria("'. $nombre . '")');            
            $consulta->execute();
            $consulta->CloseCursor();
        
    }
    public function cargarCategoria(){
        
        $consulta = $this->db->prepare('call sp_cargarCategorias()');
        $consulta->execute();
        echo $consulta->errorInfo()[2];
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }


}

// fin de clase
?>
