<?php

class ProductsController {

    private $view;

    public function __construct() {
        $this->view = new View();
    }

//constructor

    public function prodView() {
        $this->view->show("registerProds.php");
    }

    public function obtenerProd() {
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $data['prods'] = $model->obtenerProductos();
        $this->view->show("products.php", $data);
    }

    public function carritos() {
        session_start();
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $data['carrito'] = $model->obtenerCarrito($_SESSION['u_usuario']);
        $this->view->show("carrito.php", $data);
    }
    
    public function pagarCarrito() {
        session_start();
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $dato = $model->pagarCarrito($_SESSION['u_usuario']);
        $data = $model->obtenerFacturaProductos($_SESSION['u_usuario']);
        
        $item1= $dato->fetch();
        $monto = $item1[0];
        
        $item = $data->fetch();
        mail("mcalvo96@gmail.com", "Factura", "Nombre de Cliente: ".$item[1]."\nId :" .$item[0]."\nTotal : ".$monto);
        
        
        // verificar aqui
        
        $this->view->show("indexView.php");
    }
    public function registrarProducto() {
        $tipo = $_FILES["foto"]["type"];
        if ($tipo == "image/jpeg") {
            $foto = $_FILES["foto"]["name"];
            $ruta = $_FILES["foto"]["tmp_name"];
            $nombre = str_replace(".jpg", "", $foto);
            $foto = str_replace($nombre, $_POST['nombre'], $foto);
            $destino = 'view/images/' . $foto; // revisar esta ruta xq no me lo guardo en el servidor
            require 'model/ProdModel.php';
            $registrar = new ProdModel();
            if ($_POST['cantidad'] > 0) {
                if ($registrar->insertarProducto($_POST['nombre'], $_POST['precio'], 'd', $_POST['descripcion'], $destino, $_POST['cantidad'])) {
                    copy($ruta, $destino);
                }
            } else {
                if ($registrar->insertarProducto($_POST['nombre'], $_POST['precio'], 'a', $_POST['descripcion'], $destino, $_POST['cantidad'])) {
                    copy($ruta, $destino);
                }
            }
        }//if tipo archivo
        $this->view->show("indexView.php");
    }
    
    public function AgregarCarro(){
        session_start();
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $model->agregarCarro($_POST['idP'],$_SESSION['u_usuario']);
    }
    public function CrearCate(){
        session_start();
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $model->crearCate($_POST['nombre'],$_POST['estado']);
    }

    public function CrearCategoria(){
        session_start();
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $model->crearCategoria($_POST['categoria']);
        $this->view->show("indexView.php",0,0);
    }
    public function ObtenerCategoria(){
        session_start();
        require 'model/ProdModel.php';
        $model = new ProdModel();
        $data['categoria'] = $model->obtenerCategoria();
        $this->view->show("ingresarArt.php", 1,$data);
    } 
}

?>