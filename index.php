<?php
require_once $_SERVER['DOCUMENT_ROOT'] .('/empresa-mafer/view/presentation/presentation.php'); // Ruta absoluta desde la raíz del servidor

//Controladores
require_once $_SERVER['DOCUMENT_ROOT'] .('/empresa-mafer/controllers/product/productController.php'); // Ruta absoluta desde la raíz del servidor
$control = new productController();  /*Instancia */
$control -> indexProduct();          /**Accedemos a su método*/

?>
