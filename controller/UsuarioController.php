<?php
class UsuarioController {
    private $view;

    public function __construct() {
        $this->view = new View();
    }//constructor
    
    public function registrarAdmn(){
        $this->view->show("registerAdm.php");
    }
    public function registrarSoci(){
        $this->view->show("registerSoc.php");
    }
    public function productos(){
        $this->view->show("products.php");
    }
    
    public function registrarCliente(){
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->insertarCliente($_POST['nombre'], $_POST['genero'], $_POST['pass']);
        $this->view->show("indexView.php",0,0);
    }
    public function registrarAdmin(){
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->insertarAdmin($_POST['nombre'], $_POST['pass'], $_POST['edad'], $_POST['genero'], $_POST['salario'], $_POST['mail']);
        $this->view->show("indexView.php");
    }
    public function registrarSoc(){
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $model->insertarSoc($_POST['nombre'], $_POST['edad'], $_POST['genero'], $_POST['mail'], $_POST['pass']);
        $this->view->show("indexView.php");
    }
    public function login(){
  
        require 'model/UsuarioModel.php';
        $model = new UsuarioModel();
        $datos = $model->login($_POST['nombre'], $_POST['pass']);
        $bol = 0;
        $lapicha = 0;
        session_start();
        while ($item = $datos->fetch()) {
            echo $item[0].' '.$item[1].'  '.$item[2];
                if ($item[2] == 1) {
                    $lapicha = 1;
                    
                }
                if ($item[2] == 2) {
                    $lapicha = 2;
                    
                }if ($item[2] == 3) {
                    $lapicha = 3;
                    
                }
            
        }//while
        echo $lapicha;
        if ($lapicha == 1) {

            $this->view->show("indexView.php", 1, 0);
        } else if ($lapicha == 2) {
            $this->view->show("indexView.php", 2, 0);
        } else if ($lapicha == 3) {
            $this->view->show("indexView.php", 3, 0);
        }else{
            $this->view->show("indexView.php", 0, 0);
        }
        
    }

    
    public function logout(){
        session_start();
	session_destroy();
        $this->view->show("indexView.php");
    }
   
    
    
   
}
?>