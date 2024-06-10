<?php
require_once '../../Database/connectionDatabase.php';

class ProductoModel {
    private $db;

    public function __construct() {
        $this->db = connect();
    }

    public function obtenerProductos() {
        $sql = "SELECT IdProducto, nombreProducto, tipoProducto, precioProducto FROM productos";
        $result = $this->db->query($sql);

        $productos = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productos[] = $row;
            }
        }
        return $productos;
    }
}
?>
