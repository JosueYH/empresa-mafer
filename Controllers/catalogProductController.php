<?php
// controllers/ProductoController.php
require_once '../Models/Product/catalogProductModel.php';  // Incluir el modelo del producto

class ProductoController {
    private $model;

    public function __construct() {
        $this->model = new ProductoModel();
    }

    public function index() {
        $productos = $this->model->obtenerProductos();
        require_once '../View/ver.html';
    }
}
?>
