<?php

class CategoriaController {
    public function __construct() {
        $this->view=new View();
    }//contructor
    
    public function listar(){
        require 'model/ItemModel.php';
        $items=new ItemModel();
        $data['listado']=$items->listar();
        
        $this->view->show('listar.php',$data);
    }
    
    public function mostrarCategoriaView(){
        $this->view->show('registrarCategoriaView.php',null);         
    }
    
    public function registrarCategoria() {
        require 'model/CategoriaModel.php';
        
        //obtiene los datos del formulario
        $nombre = $_POST["nombre"];

        //instancia el modelo
 
        $items = new CategoriaModel();

        $data['registro'] = $items->registrar($nombre);
        

        $this->view->show("OwnerView.php",null);
        echo "<script>";
        echo "MostrarOwnerForms('view/confirmacionView.php');";
        echo "</script>";
    }
   
    
    
}//fin de clase
