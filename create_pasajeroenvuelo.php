<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'create_pasajeroenvuelo') {
    // Obtener el cuerpo de la solicitud y decodificarlo
    $data = json_decode(file_get_contents('php://input'), true);
    
    $pasajero_id = $data['pasajero_id'];
    $vuelo_id = $data['vuelo_id'];
    $billete = $data['billete'];
    $asiento = $data['asiento'];

    $sql = "INSERT INTO PasajeroEnVuelo (Pasajero_ID, Vuelo_ID, Billete, Asiento) VALUES ('$pasajero_id', '$vuelo_id', '$billete', '$asiento')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'id' => $conn->insert_id]);
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }
}
