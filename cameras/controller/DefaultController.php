<?php

class DefaultController{
    private $view;
    
    public function __construct() {
        $this->view=new View();
    } // constructor
    
    public function acciondefault(){
        // llamar modelo para traer datos
        $this->view->show("indexView.php", null);        
    } // acciondefault
    
    public function mostrarRegistraArticulo(){  
        $this->view->show("registrarArticuloView.php",null);
    }
           
} // fin clase

?>

