<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once $_SERVER['DOCUMENT_ROOT'] . 'empresa-mafer/models/product/catalogProductModel.php';  // Incluir el modelo del producto
require('../models/product/catalogProductModel.php');  // Incluir el modelo del producto

class catalogProductController {
    private $model;

    public function __construct() {
        $this->model = new catalogProductModel();
    }

    public function index() {
        $productos = $this->model->obtenerProductos();
        require('../../view/ver.php');  // Asegúrate de que la ruta a tu vista sea correcta
        //require_once $_SERVER['DOCUMENT_ROOT'] . '../view/ver.php';  // Asegúrate de que la ruta a tu vista sea correcta
    }
}
// Instancia del controlador para probar la funcionalidad
$controller = new catalogProductController();
$controller->index();
?>
