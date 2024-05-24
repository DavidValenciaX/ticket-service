<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pasajeros_tiquetes";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}