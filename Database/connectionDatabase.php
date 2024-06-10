<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maferDatabase";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
