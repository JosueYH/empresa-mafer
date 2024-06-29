<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../Database/connectionDatabase.php';

$conn = connectionDatabase();
if ($conn) {
    echo "Conexión exitosa";
} else {
    echo "Error en la conexión";
}
?>
