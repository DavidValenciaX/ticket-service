<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'delete_pasajero') {
    $id = $_POST['id'];

    $sql = "DELETE FROM Pasajero WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Pasajero eliminado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}