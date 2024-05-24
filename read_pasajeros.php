<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'read_pasajeros') {
    $sql = "SELECT * FROM Pasajero";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $pasajeros = array();
        while($row = $result->fetch_assoc()) {
            $pasajeros[] = $row;
        }
        echo json_encode($pasajeros);
    } else {
        echo "0 resultados";
    }
}