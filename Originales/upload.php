<?php
include 'config.php'; // Asegúrate de que este archivo esté correctamente configurado

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura de datos del formulario
    $cliente = $_POST['cliente'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $geoposicion = $_POST['geoposicion'];
    $tipo_documento = $_POST['tipo_documento'];
    $cantidad_hojas = $_POST['cantidad_hojas'];
    $frente_dorso = $_POST['frente_dorso'];
    $cantidad_ejemplares = $_POST['cantidad_ejemplares'];

    // Manejo de archivos
    if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['archivo']['tmp_name'];
        $name = basename($_FILES['archivo']['name']);
        $upload_dir = 'uploads/';

        // Verificar si el directorio existe, si no, crearlo
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Crea la carpeta con permisos 0777
        }

        // Mover el archivo a la carpeta de uploads
        if (move_uploaded_file($tmp_name, $upload_dir . $name)) {
            echo "Archivo cargado exitosamente: " . $name;

            // Insertar datos en la tabla pedido
            $stmt = $conn->prepare("INSERT INTO pedido (cliente, nombre, email, telefono, direccion, geoposicion, tipo_documento, cantidad_hojas, frente_dorso, cantidad_ejemplares, archivo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssiiss", $cliente, $nombre, $email, $telefono, $direccion, $geoposicion, $tipo_documento, $cantidad_hojas, $frente_dorso, $cantidad_ejemplares, $name);

            if ($stmt->execute()) {
                echo "Datos insertados correctamente en la tabla pedido.";
            } else {
                echo "Error al insertar datos: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error al mover el archivo.";
        }
    } else {
        echo "Error al cargar el archivo.";
    }
}

// Cerrar la conexión
$conn->close();
?>