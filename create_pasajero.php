<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['action']) && $_GET['action'] == 'create_pasajero') {
    // Obtener el cuerpo de la solicitud y decodificarlo
    $data = json_decode(file_get_contents('php://input'), true);

    $nombre = $data['nombre'];
    $apellidos = $data['apellidos'];
    $fecha_nac = $data['fecha_nac'];
    $sexo = $data['sexo'];

    $sql = "INSERT INTO Pasajero (Nombre, Apellidos, Fecha_Nac, Sexo) VALUES ('$nombre', '$apellidos', '$fecha_nac', '$sexo')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'id' => $conn->insert_id]);
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }
}