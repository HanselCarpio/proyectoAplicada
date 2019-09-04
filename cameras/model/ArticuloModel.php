<?php

class ArticuloModel {

    protected $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db = SPDO::singleton();
    }

//constructor$usuario,$Precio,$Descripcion,$Categoria,"imagen"
    
    public function registrar($idProduct, $nombre, $Precio, $Descripcion, $Categoria, $file) {

            $consulta = $this->db->prepare('call sp_insertarArticulo("'. $idProduct . '","' . $nombre . '","' . $Precio . '","' .$Descripcion. '","' .$Categoria. '","'. $file.'")');
            $consulta->execute();
            $consulta->CloseCursor();        
    }
    
    public function cargarArticulos(){
        
        $consulta = $this->db->prepare('call sp_cargarArticulos()');
        $consulta->execute();
        echo $consulta->errorInfo()[2];
        $resultado = $consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    }

}

// fin de clase
?>
