<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'delete_pasajeroenvuelo') {
    $id = $_POST['id'];

    $sql = "DELETE FROM PasajeroEnVuelo WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pasajero en vuelo eliminado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}