<?php

    class TiendaController {
    
        public function __construct(){
            $this->view = new View();
        }//Fin del constructor.
        
        public function verificaSesion() {
            require 'model/TiendaModel.php';
            session_start();

            if (!isset($_SESSION['contador'])) {
                if(isset($_POST['usuario'])){
                    $items = new TiendaModel();
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
                }else{
                    $this->view->show("tiendaView.php",0, 0);
                }//Verifica si viene de un formulario.
            } else {
                $this->view->show("tiendaView.php", 0, 0);
            }//Fin del isset session.
        }//Fin de la función verificaSesion.

        public function cerrarSesion(){
            session_start();
            session_destroy();
            $this->view->show("indexView.php", 0, 0);
        }//Fin de la función cerrarSesión.

        public function revisarCatalogo(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulos'] = $items->obtenerArticulos(1, $_SESSION['user']);
            $this->view->show("tiendaView.php", $data, 1);
        }//Fin de la función revisarCatálogo.

        public function cambiarDatos(){
            session_start();
            $this->view->show("tiendaView.php", 1, 0);
        }//Fin de la función insertarArticulo.

        public function actualizarCuenta(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();

            if($items->actualizarCuenta($_SESSION['user'], $_POST['usuario'], $_POST['pass']))
                $this->view->show("tiendaView.php", 2, 0);
            else
                $this->view->show("tiendaView.php", 3, 0);
        }//Fin de la función actualizarCuenta.
        
        public function agregarAdmin(){
            session_start();
            $this->view->show("tiendaView.php", 4, 0);
        }//Fin de la función agregarAdmin.
        
        public function registrarAdministrador(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();

            if($items->registrarAdministrador($_POST['usuario'], $_POST['pass']))
                $this->view->show("tiendaView.php", 5, 0);
            else
                $this->view->show("tiendaView.php", 6, 0);
        }//Fin de la función actualizarCuenta.
        
        public function mostrarFormularioArticulo(){
            session_start();
            $this->view->show("tiendaView.php", 8, 0);
        }//Fin de la función mostrarFormularioArticulo.
        
        public function crudArticulos() {
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            $tipo = $_FILES["foto"]["type"];
            session_start();
            
            if (!isset($_POST['buscar'])) {
                if($tipo == "image/jpeg" or $tipo == "image/png"){
                    $foto = $_FILES["foto"]["name"];
                    $ruta = $_FILES["foto"]["tmp_name"];

                    if ($tipo == "image/jpeg") {
                        $nombre = str_replace(".jpg", "", $foto);
                    } else if ($tipo == "image/png") {
                        $nombre = str_replace(".png", "", $foto);
                    }//Verifica el formato de la imagen.

                    $foto = str_replace($nombre, $_POST['nombre'], $foto);
                    $destino = "public/images/".$foto;

                    if(isset($_POST['insertar'])){
                        if($items->registrarArticulo($_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['cantidad'], $destino)){
                            copy($ruta, $destino);
                            $this->view->show("tiendaView.php", 9, 0);
                        }else{
                            $this->view->show("tiendaView.php", 10, 0);
                        }//Verifica si registro correctamente el artículo.
                    }else{
                         if($items->actualizarArticulo($_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $_POST['cantidad'], $destino)){
                            copy($ruta, $destino);
                            $this->view->show("tiendaView.php", 11, 0);
                        }else{
                            $this->view->show("tiendaView.php", 12, 0);
                        }//Verifica si registro correctamente el artículo.
                    }//Fin del if isset.
                }//Verifica si el archivo insertado es una imagen.
            }else{
                $data['articulo'] = $items->obtenerArticulo($_POST['nombre']);
                $this->view->show("tiendaView.php", $data, 3);
            }
        }//Fin de la función registrarArticulo.
        
        public function abrirProducto($nombreProducto){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $items->agregarVisto($nombreProducto, $_SESSION['user']);
            $data['articulo'] = $items->obtenerArticulo($nombreProducto);
            $this->view->show("tiendaView.php", $data, 2);
        }//Fin de la función abrirProducto.
        
        public function registrarProductoFavorito($nombreProducto){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $items->registrarProductoFavorito($nombreProducto, $_SESSION['user']);
            $data['articulo'] = $items->obtenerArticulo($nombreProducto);
            $this->view->show("tiendaView.php", $data, 2);
        }//Fin de la función registrarProductoFavorito.
        
        public function obtenerFavoritos(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulos'] = $items->obtenerArticulos2($_SESSION['user'], 1);
            $this->view->show("tiendaView.php", $data, 1);
        }//Fin de la función obtenerFavoritos.
        
        public function obtenerVistos(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulos'] = $items->obtenerArticulos2($_SESSION['user'], 2);
            $this->view->show("tiendaView.php", $data, 1);
        }//Fin de la función obtenerVitos.
        
        public function mostrarFormularioPromociones(){
            session_start();
            $this->view->show("tiendaView.php", 13, 0);
        }//Fin de la función mostrarFormularioPromociones.
        
        public function crudPromocion(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            
            if(isset($_POST['insertar'])){
                if($items->insertarPromocion($_POST['idPromo'], $_POST['descuento'], $_POST['AñoI'].'-'.$_POST['MesI'].'-'.$_POST['DiaI'], $_POST['AñoF'].'-'.$_POST['MesF'].'-'.$_POST['DiaF'])){
                    $this->view->show("tiendaView.php", 14, 0);
                }else{
                    $this->view->show("tiendaView.php", 15, 0);
                }//Verifica si se insertó correctamente o no la promoción.
            }//Fin del if isset.
        }//Fin de la función crudPromocion.
        
        public function mostrarVinculacion(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['datos'] = $items->obtenerDatosVinculacion();
            $this->view->show("tiendaView.php", 16, $data);
        }//Fin de la función mostrarVinculación.
        
        public function vincularArticulo(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            
            if ($items->aniadirPromocionArticulo($_POST['articulos'], $_POST['promocion'])) {
                $data['datos'] = $items->obtenerDatosVinculacion();
                $this->view->show("tiendaView.php", 17, $data);
            } else {
                $data['datos'] = $items->obtenerDatosVinculacion();
                $this->view->show("tiendaView.php", 18, $data);
            }//Verifica si se insertó correctamente o no la promoción.
        }//Fin de la función vincularArticulo.
        
        public function obtenerPromociones(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulos'] = $items->obtenerPromociones();
            $this->view->show("tiendaView.php", $data, 19);
        }//Fin de la función obtenerPrommociones.
        
        public function obtenerArticuloPromocionado($nombreProducto){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulo'] = $items->obtenerArticulo($nombreProducto);
            $this->view->show("tiendaView.php", $data, 20);
        }//Fin de la función obtenerArticuloPromocionado. 
        
        public function añadirCarrito($nombreProducto){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $items->anadirCarrito($nombreProducto, $_SESSION['user'], 1);
            $data['articulo'] = $items->obtenerArticulo($nombreProducto);
            $this->view->show("tiendaView.php", $data, 20);
        }//Fin de la función añadirCarrito.
        
        public function mostrarCarrito(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulos'] = $items->obtenerArticulos(2, $_SESSION['user']);
            $this->view->show("tiendaView.php", $data, 21);
        }//Fin de la función mostrarCarrito.
        
        public function mostrarCompras(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            $data['articulos'] = $items->obtenerArticulos(3, $_SESSION['user']);
            $this->view->show("tiendaView.php", $data, 22);
        }//Fin de la función mostrarCompras.
        
        public function comprarProducto($nombreProducto){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            if($items->comprarProducto($nombreProducto, $_SESSION['user'])){
                $data['articulo'] = $items->obtenerArticulo($nombreProducto);
                $this->view->show("tiendaView.php", $data, 26);
            }else{
                $data['articulo'] = $items->obtenerArticulo($nombreProducto);
                $this->view->show("tiendaView.php", $data, 27);
            }//Verifica si se pudo realizar o no la inserción.
        }//Fin de la función comprarProducto.
        
        public function mostrarGasto(){
            session_start();
            $this->view->show("tiendaView.php", 23, 0);
        }//Fin de la función mostrarGasto.
        
        public function registrarGasto(){
            require 'model/TiendaModel.php';
            $items = new TiendaModel();
            session_start();
            
            if(isset($_POST['insertar'])){
                if($items->registroGastos($_POST['descripcion'], $_POST['monto'], $_POST['AñoF'].'-'.$_POST['MesF'].'-'.$_POST['DiaF'])){
                    $this->view->show("tiendaView.php", 24, 0);
                }else{
                    $this->view->show("tiendaView.php", 25, 0);
                }//Verifica si se insertó correctamente o no la promoción.
            }//Fin del if isset.
        }//Fin de la función registrarGasto.
       
    }//Fin del TiendaController.
?>
