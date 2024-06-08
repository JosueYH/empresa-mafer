<?php
require_once '../../Database/connectionDatabase';

class Product {
    private $db;

    public function __construct() {
        $this->db = connect();
    }

    public function getProducts() {
        $query = "SELECT * FROM productos";
        $result = $this->db->query($query);
        $products = [];
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        
        return $products;
    }
}
?>