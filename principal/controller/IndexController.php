<?php

class IndexController {
    
    public function __construct(){
        $this->view = new View();
    }//Fin del constructor.
    
    public function inicio(){
        $this->view->show("indexView.php", 0, 0);
    }//Fin de la funcion inicio.
    
    public function visitarTienda(){
        $this->view->show("tiendaView.php", 0, 0);
    }//Fin de la función visitarTienda.
    
    public function ventas(){
        $this->view->show("ventas.php", 0, 0);
    }//Fin de la función visitarTienda.
     public function inventario(){
        $this->view->show("inventario.php", 0, 0);
    }//Fin de la función visitarTienda.
    
    public function registrar(){
        $this->view->show("RegisterAndLogin.php", 1, 0);
    }//Fin de la función registrar.
   
    
    public function login(){
        $this->view->show("RegisterAndLogin.php", 2, 0);
    }//Fin de la función login.
     public function ingresarArt(){
        $this->view->show("ingresarArt.php", 1, 0);
    }//Fin de la función registrar.
     public function crearCate(){
        $this->view->show("ingresarArt.php", 2, 0);
    }//Fin de la función registrar.
    
    public function registrarUsuario(){
        require 'model/IndexModel.php';
        $items = new IndexModel();
        
        if($items->insertarUsuario($_POST['nombre'], $_POST['apellidos'], $_POST['edad'], $_POST['genero'], $_POST['nombreUsuario'], $_POST['correo'], $_POST['pass'], $_POST['numCuenta']))
            $this->view->show("indexView.php", 3, 0);
        else
            $this->view->show("indexView.php", 4, 0);
    }//Fin de la función insertarActor.
    
    public function verificaSesion() {
        require 'model/IndexModel.php';
        session_start();
        
        if (!isset($_SESSION['contador'])) {
            $items = new IndexModel();
            $resultado = $items->verificaSesion($_POST['usuario'], $_POST['pass']);
            $error = 1;

            while ($datos = $resultado->fetch()) {
                $error = 0;
                if ($datos[0] == $_POST['usuario']) {
                    $_SESSION['user'] = $_POST['usuario'];
                    if (isset($datos[1])) {
                        $_SESSION['contador'] = 2;
                        $this->view->show("tiendaView.php", 0, 0);
                    } else {
                        $_SESSION['contador'] = 1;
                        $this->view->show("tiendaView.php", 0, 0);
                    }//Verifica si es un usuario o un administrador.
                }//Verifica si los datos coinciden.
                break;
            }//Fin del while.

            if ($error) {
                $this->view->show("indexView.php", 5, 0);
            }//Verifica si falló el login.
        } else {
            $this->view->show("tiendaView.php", 0, 0);
        }//Fin del isset session.
    }//Fin de la función verificaSesion.

}//Fin de la clase ItemsController.
