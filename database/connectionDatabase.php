<?php
    class connectionDatabase {
        private $host = "localhost";
        private $dbname = "maferDatabase";
        private $username = "root";
        private $password = "";
        
        public function conexion() {
            // Crear una nueva conexión MySQLi
            $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

            // Verificar si hay un error en la conexión
            if ($conn->connect_error) {
                return "La Conexión ha fallado: ".$conn->connect_error; //Retornar el mensaje de error si hay problemas de conexión
            } else {
                // Retornar el objeto MySQLi si la conexión es exitosa
                return $conn;
                //echo "La conexión se realizó de manera exitosa!";
            }
        }
    }

// Descomentar para probar la conexión
//$obj = new connectionDatabase();
//print_r($obj->conexion());
?>
