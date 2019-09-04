<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemController
 *
 * @author Nelson
 */
class ItemController {
   
    public function __construct() {
        $this->view=new View();
    }  // constructor
    
    public function listar(){
        require 'model/ItemModel.php';
        $items=new ItemModel();
        $data['listado']=$items->listar();
        
        $this->view->show("ventas.php", $data,0);
          
    } // listar


     public function mostrarFormulario(){
       
        
        $this->view->show("formulario.php", NULL);
          
    } // listar
    public function proceso(){
        $resultado=$_POST['valor1']+$_POST['valor2'];
        echo $resultado;
    }
    
} // fin clase
