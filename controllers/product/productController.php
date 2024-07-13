<?php
require $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/models/product/productModel.php');  // Incluir el modelo del producto

class productController {
    private $model;

    public function __construct() {
        $this->model = new productModel();
    }

    public function indexProduct() {
        try {
            $productos = $this->model->obtenerProductos();
             // Pasar la variable $productos a la vista
            require_once $_SERVER['DOCUMENT_ROOT'].'/empresa-mafer/view/maintenance/product/listproduct.php';
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

}

// Instancia del controlador para probar la funcionalidad
//$controller = new productController();
//$controller->indexProduct();

/*Para la prueba de Errores*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>