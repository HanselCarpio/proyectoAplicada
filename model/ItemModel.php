<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemModel
 *
 * @author Nelson
 */
class ItemModel {
    protected $db;
    
    public function __construct(){
        require 'libs/SPDO.php';
        $this->db= SPDO::singleton();        
    } // constructor
    
    public function listar(){
        $consulta=$this->db->prepare('call sp_listar()');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } // fin listar

} // fin clase
