<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'update_pasajeroenvuelo') {
    $id = $_POST['id'];
    $pasajero_id = $_POST['pasajero_id'];
    $vuelo_id = $_POST['vuelo_id'];
    $billete = $_POST['billete'];
    $asiento = $_POST['asiento'];

    $sql = "UPDATE PasajeroEnVuelo SET Pasajero_ID='$pasajero_id', Vuelo_ID='$vuelo_id', Billete='$billete', Asiento='$asiento' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo pasajero en vuelo creado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
