<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'update_pasajero') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fecha_nac = $_POST['fecha_nac'];
    $sexo = $_POST['sexo'];

    $sql = "UPDATE Pasajero SET Nombre='$nombre', Apellidos='$apellidos', Fecha_Nac='$fecha_nac', Sexo='$sexo' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pasajero actualizado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}