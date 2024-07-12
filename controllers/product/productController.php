<?php

require $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/models/product/productModel.php');  // Incluir el modelo del producto
//require('../../models/product/catalogProductModel.php');  // Incluir el modelo del producto
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class productController {
    private $model;

    public function __construct() {
        $this->model = new productModel();
    }

    public function index() {
        $productos = $this->model->obtenerProductos();
        require $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/view/ver.php');
        //require('../../view/ver.php');
    }
}
// Instancia del controlador para probar la funcionalidad
//$controller = new productController();
//$controller->index();
?>
