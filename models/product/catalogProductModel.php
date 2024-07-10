<?php

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

//require_once $_SERVER['DOCUMENT_ROOT'] . '../../database/connectionDatabase.php';
require_once '../../database/connectionDatabase.php';

class catalogProductModel {
    private $db;

    public function __construct() {
        $database = new connectionDatabase(); //Instanciamos
        $this->db = $database->conexion(); //Accedemos al método o a la función
        
        if ($this->db->connect_error) {
            die("La conexión ha fallado: ".$this->db->connect_error);
        }
    }

    public function obtenerProductos() {
        $sql = "SELECT IdProducto, nombreProducto, categoriaProducto, tipoProducto, precioProducto FROM tProductos";
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

        // Retornar los productos obtenidos
        return $productos;
    }
}

// Bloque para prueba directa al cargar el archivo en el navegador
$modeloProductos = new catalogProductModel();
$productos = $modeloProductos->obtenerProductos();

echo "<pre>";
print_r($productos);
echo "</pre>";
?>