<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'read_pasajeroenvuelo_by_billete') {
    $billete = $_GET['billete'];
    $sql = "SELECT * FROM PasajeroEnVuelo WHERE Billete = '$billete'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode([]);
    }
}