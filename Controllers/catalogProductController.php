<?php
require_once '../Models/Product/catalogProductModel.php';

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function displayProducts() {
        $products = $this->productModel->getProducts();
        require_once '../views/product_view.php';
    }
}

// Crear una instancia del controlador y llamar al método para mostrar productos
$controller = new ProductController();
$controller->displayProducts();
?>
