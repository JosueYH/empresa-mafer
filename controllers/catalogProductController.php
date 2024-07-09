<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once '../models/product/catalogProductModel.php';  // Incluir el modelo del producto

class catalogProductController {
    private $model;

    public function __construct() {
        $this->model = new catalogProductModel();
    }

    public function index() {
        $productos = $this->model->obtenerProductos();
        require_once '../view/ver.php';  // Asegúrate de que la ruta a tu vista sea correcta
    }
}
?>
