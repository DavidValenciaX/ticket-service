<?php
        $vuelo_id = $_GET['vuelo_id'];
        $sql = "SELECT * FROM PasajeroEnVuelo WHERE Vuelo_ID = $vuelo_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $pasajeros_en_vuelo = array();
            while($row = $result->fetch_assoc()) {
                $pasajeros_en_vuelo[] = $row;
            }
            echo json_encode($pasajeros_en_vuelo);
        } else {
            echo json_encode([]);
        }