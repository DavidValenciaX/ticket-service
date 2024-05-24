<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'read_pasajeroenvuelo') {
    $sql = "SELECT * FROM PasajeroEnVuelo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $pasajeros_en_vuelo = array();
        while($row = $result->fetch_assoc()) {
            $pasajeros_en_vuelo[] = $row;
        }
        echo json_encode($pasajeros_en_vuelo);
    } else {
        echo "0 resultados";
    }
}