<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/empresa-mafer/database/connectionDatabase.php';
//require ('../../database/connectionDatabase.php');

class productModel {
    private $db;

    public function __construct() {
        $database = new connectionDatabase(); //Instanciamos
        $this->db = $database->conexion(); //Accedemos al método o a la función
        
        if ($this->db->connect_error) {
            die("La conexión ha fallado: ".$this->db->connect_error);
        }
    }

    public function obtenerProductos() {
        $sql = "SELECT idProducto, nombreProducto, categoriaProducto, tipoProducto, precioProducto FROM tProductos";
        $result = $this->db->query($sql);

        // Verificar si la consulta se ejecutó correctamente
        if (!$result) {
            die('Error en la consulta: ' . $this->db->error);
        }

        $productos = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productos[] = $row;
            }
        }

        return $productos; // Retornar los productos obtenidos
    }
}

// Bloque para prueba directa al cargar el archivo en el navegador
//$modeloProductos = new productModel();
//$productos = $modeloProductos->obtenerProductos();

//echo "<pre>";
//print_r($productos);
//echo "</pre>";

//Para la prueba de Errores:
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
?>