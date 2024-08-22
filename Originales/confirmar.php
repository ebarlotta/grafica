<?php
include 'config.php';

$cliente = $_GET['cliente'];
$nombre = $_GET['nombre'];
$email = $_GET['email'];
$telefono = $_GET['telefono'];
$direccion = $_GET['direccion'];
$geoposicion = $_GET['geoposicion'];
$tipo_documento = $_GET['tipo_documento'];
$cantidad_hojas = $_GET['cantidad_hojas'];
$frente_dorso = $_GET['frente_dorso'];
$cantidad_ejemplares = $_GET['cantidad_ejemplares'];
$archivo = $_GET['archivo'];

$sql = "INSERT INTO pedidos (cliente, nombre, email, telefono, direccion, geoposicion, tipo_documento, cantidad_hojas, frente_dorso, cantidad_ejemplares, archivo)
VALUES ('$cliente', '$nombre', '$email', '$telefono', '$direccion', '$geoposicion', '$tipo_documento', '$cantidad_hojas', '$frente_dorso', '$cantidad_ejemplares', '$archivo')";

if ($conn->query($sql) === TRUE) {
    echo "Pedido confirmado y guardado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
