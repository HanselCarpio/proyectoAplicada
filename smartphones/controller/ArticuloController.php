<?php

class ArticuloController {

    public function __construct() {
        $this->view = new View();
    }

//contructor

    public function listar() {
        require 'model/ItemModel.php';
        $items = new ItemModel();
        $data['listado'] = $items->listar();

        $this->view->show('listar.php', $data);
    }

    public function cargarImagen() {
        echo "subiendo...";
        $target_path = "public/img/";
        $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
        if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
            echo "El archivo " . basename($_FILES['uploadedfile']['name']) .
            " ha sido subido";
        } else {
            echo "Ha ocurrido un error, trate de nuevo!";
        }
    }

    public function cargarCategorias() {
        require 'model/CategoriaModel.php';
        $items = new CategoriaModel();
        $data['registro'] = $items->cargarCategoria();

        $this->view->show('registrarArticuloView.php', $data);
    }

    public function cargarArticulos() {
        require 'model/ArticuloModel.php';
        $items = new ArticuloModel();
        $data['registro'] = $items->cargarArticulos();
//        $this->view->show('registrarComboView.php', $data);
    }

    public function registrarArticulo() {

        $prename = rand(1000, 99999);
        $prename = $prename . '_';

        $nombref = $prename . $_FILES["file"]["name"];
        if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/JPG") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 2000000)) {
            if ($_FILES["file"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "";
            } else {

                if (file_exists("public/img/" . $nombref)) {
                    echo $_FILES["file"]["name"] . " already exists. ";
                } else {

                    move_uploaded_file($_FILES["file"]["tmp_name"], "public/img/" . $nombref);
                    $nombreArchivo = $_FILES["file"]["name"];
                }
            }
        } else {
            echo "Archivo invalido, Solamente archivos GIF, JPG y PNG son permitidos";
        }

        require 'model/ArticuloModel.php';

//        public function insertarMueble() {
//        require 'model/ItemModel.php';
//        require 'public/domain/Mueble.php';
//        
//        
//        $codigoMueble = $_POST['codigoMueble'];
//        $nombre = $_POST['nombre'];
//        $maderaM = $_POST['maderaM'];
//        $pulgadas = $_POST['pulgadas'];
//        $acabadoM = $_POST['acabadoM'];
//        $cm = $_POST['cm'];
//        $costoM = $_POST['costoM'];
//        $codAN = $_POST['codAN'];
//        
//        $items = new ItemModel();
//        $mueble = new Mueble();
//        
//        $mueble->setCodigoMueble($codigoMueble);
//        $mueble->setNombre($nombre);
//        $mueble->setMadera($maderaM);
//        $mueble->setPulgadas($pulgadas);
//        $mueble->setAcavado($acabadoM);
//        $mueble->setCm($cm);
//        $mueble->setCosto($costoM);
//        $mueble->setCodAN($codAN);
//        
//        
//        $items->registrar($mueble);
//        echo json_encode('Se ha insertado correctamente');
//    }
        
        //obtiene los datos del formulario
        $idProduct = $_POST["idProduct"];
        $nombre = $_POST["nombre"];
        $Precio = $_POST["Precio"];
        $Descripcion = $_POST["Descripcion"];
        $Categoria = $_POST["Categoria"];
        $file = $nombref;
        
        $items = new ArticuloModel();

        $data['registro'] = $items->registrar($idProduct, $nombre, $Precio, $Descripcion, $Categoria ,$file);


        $this->view->show("indexView.php", null);
        echo "<script>";
        echo json_encode('Se ha insertado correctamente');
        echo "MostrarOwnerForms('view/confirmacionView.php');";
        echo "</script>";
    }

}

//fin de clase
