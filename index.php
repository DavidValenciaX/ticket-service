<?php
include 'conexion.php'; // archivo con la configuración de la base de datos

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'create_pasajero':
        include 'create_pasajero.php';
        break;
    case 'read_pasajeros':
        include 'read_pasajeros.php';
        break;
    case 'read_pasajero':
        include 'read_pasajero.php';
        break;
    case 'update_pasajero':
        include 'update_pasajero.php';
        break;
    case 'delete_pasajero':
        include 'delete_pasajero.php';
        break;
    case 'create_pasajeroenvuelo':
        include 'create_pasajeroenvuelo.php';
        break;
    case 'read_pasajeroenvuelo':
        include 'read_pasajeroenvuelo.php';
        break;
    case 'read_pasajeroenvuelo_by_vuelo':
        include 'read_pasajeroenvuelo_by_vuelo.php';
        break;
    case 'read_pasajeroenvuelo_by_billete':
        include 'read_pasajeroenvuelo_by_billete.php';
        break;
    case 'update_pasajeroenvuelo':
        include 'update_pasajeroenvuelo.php';
        break;
    case 'delete_pasajeroenvuelo':
        include 'delete_pasajeroenvuelo.php';
        break;
    default:
        echo "Acción no válida";
        break;
}
