<?php
require_once '../../Database/connectionDatabase.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class catalogProductModel {
    private $db;

    public function __construct() {
        $this->db = connectionDatabase();
        if ($this->db->connect_error) {
            die("La conexión ha fallado: " . $this->db->connect_error);
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

        // Imprimir los productos para depuración
        print_r($productos);
        return $productos;
    }
}
?>
