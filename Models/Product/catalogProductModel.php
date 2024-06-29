<?php
require_once 'Database/connectionDatabase.php';
//require_once '../../Database/connectionDatabase.php';


class catalogProductModel {
    private $db;

    public function __construct() {
        $this->db = connectionDatabase();
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
        //return $productos;
    }
}
?>
