<?php

class ItemController {
//
//    public function __construct() {
//        $this->view = new View();
//    }
//    
//    //Método devolver la vista registrar
//    public function registrar() {
//        $this->view->show("register.php", null);
//    }
//    
//    public function registrarAcabados() {
//        $this->view->show("registrarAcabados.php", null);
//    }
//    
//    public function registrarClientes() {
//        $this->view->show("registrarClientes.php", null);
//    }
//    
//    public function delete() {        
//        $this->view->show("CRUDmueble.php", null);
//    }
//
//    //Método para registrar
//    public function insertarMadera() {
//        require 'model/ItemModel.php';
//        require 'public/domain/Madera.php';
//        
//        
//        $nombre = $_POST['nombre'];
//        $precio = $_POST['precio'];
//        
//        $items = new ItemModel();
//        $madera = new Madera();
//        
//        $madera->setNombre($nombre);
//        $madera->setPrecio($precio);
//        
//        
//        $items->registrar($madera);
//        echo json_encode('Se ha insertado correctamente');
//    }
//    
//    public function insertarAcabados() {
//        require 'model/ItemModel.php';
//        require 'public/domain/Acabados.php';
//        
//        
//        $tipo = $_POST['tipo'];
//        $costo = $_POST['costo'];
//        
//        $items = new ItemModel();
//        $acabados = new Acabados();
//        
//        $acabados->setTipo($tipo);
//        $acabados->setCosto($costo);
//        
//        
//        $items->registrarAcabados($acabados);
//        echo json_encode('Se ha insertado correctamente');
//    }
//
//    public function insertarClientes() {
//        require 'model/ItemModel.php';
//        require 'public/domain/Cliente.php';
//        
//        
//        $codigo = $_POST['codigo'];
//        $nombre = $_POST['nombre'];
//        $direccion = $_POST['direccion'];
//        
//        $items = new ItemModel();
//        $clientes = new Cliente();
//        
//        $clientes->setCodigo($codigo);
//        $clientes->setNombre($nombre);
//        $clientes->setDireccion($direccion);
//        
//        
//        $items->registrarClientes($clientes);
//        echo json_encode('Se ha insertado correctamente');
//    }
//    
//    public function insertarMueble() {
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
//
//    
//       
//    //Método devolver la vista actualizar
//    public function update() {
//        $this->view->show("update.php", null);
//    }
//    
//        //Método para actualizar
//    public function actualizarPersona() {
//        require 'model/ItemModel.php';
//        require 'public/domain/Persona.php';
//        
//        $cedula = $_POST['cedula'];
//        $nombre = $_POST['nombre'];
//        $apellido = $_POST['apellido'];
//        $edad = $_POST['edad'];
//        
//        $items = new ItemModel();
//        $persona = new Madera();
//        
//        $persona->setCedula($cedula);
//        $persona->setNombre($nombre);
//        $persona->setPrecio($apellido);
//        $persona->setEdad($edad);
//        
//        
//        $items->actualizar($persona);
//        echo json_encode('Se ha actualzado correctamente');
//    }
//    
// 
//
//    //Método para registrar
////    public function update_commit() {
////        require 'model/ItemModel.php';
////        $items = new ItemModel();
////        $items->actualizar();
////        $this->view->show("update.php", null);
////    }
//
////    public function delete() {        
////        $this->view->show("CRUDmueble.php", null);
////    }
//
//    //Método para registrar
////    public function delete_commit() {
////        require 'model/ItemModel.php';
////        $items = new ItemModel();
////        $items->borrar();
////        $this->view->show("delete.php", null);
////    }
//    
//    
//     public function borrarPersona() {
//        require 'model/ItemModel.php';
//        require 'public/domain/Persona.php';
//        
//        $cedula = $_POST['cedula'];
//      
//        
//        $items = new ItemModel();
//        $persona = new Madera();
//        
//        $persona->setCedula($cedula);
//         
//        $items->borrar($persona);
//        echo json_encode('Se ha borrado correctamente');
//    }
//    
//
//    public function mostrarFormulario() {
//
//
//        $this->view->show("formulario.php", null);
//    }
//
//    public function proceso() {
//        $resultado = $_POST['valor1'] + $_POST['valor2'];
//        echo $resultado;
//    }

}
