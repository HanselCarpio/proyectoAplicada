<?php


class  Articulo{
    //put your code here
    
    private $idProduct;
    private $nombre;
    private $precio;
    private $descripcion;
    private $categoria;
    private $file;
    
    
    function __construct() {
        $this->idProduct = "";
        $this->nombre = "";
        $this->precio = 0;
        $this->descripcion = "";
        $this->categoria = 0;
        $this->file = "";
    }
    
    
    function getJsonData() {
        $var = get_object_vars($this);
        foreach ($var as &$value) {
            if (is_object($value) && method_exists($value, 'getJsonData')) {
                $value = $value->getJsonData();
            }
        }
        return $var;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

        
    function getIdProduct() {
        return $this->idProduct;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getFile() {
        return $this->file;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setFile($file) {
        $this->file = $file;
    }

}
