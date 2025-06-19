<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ventas_php";
$port = "3306"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Quita este `echo` en producción
// echo "Conexión exitosa";
?>
