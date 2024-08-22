<?php
include 'config.php';

// Crear
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear_precio'])) {
    $tipo_documento = $_POST['tipo_documento'];
    $precio_base = $_POST['precio_base'];
    $sql = "INSERT INTO precios (tipo_documento, precio_base) VALUES ('$tipo_documento', '$precio_base')";
    $conn->query($sql);
}

// Leer
$result = $conn->query("SELECT * FROM precios");

// Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar_precio'])) {
    $id = $_POST['id'];
    $tipo_documento = $_POST['tipo_documento'];
    $precio_base = $_POST['precio_base'];
    $sql = "UPDATE precios SET tipo_documento='$tipo_documento', precio_base='$precio_base' WHERE id=$id";
    $conn->query($sql);
}

// Eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar_precio'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM precios WHERE id=$id";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Precios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Administrar Precios</h1>
    <form method="post">
        <input type="text" name="tipo_documento" placeholder="Tipo de Documento" required>
        <input type="number" step="0.01" name="precio_base" placeholder="Precio Base" required>
        <button type="submit" name="crear_precio">Crear</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo de Documento</th>
            <th>Precio Base</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form method="post">
                <td><?php echo $row['id']; ?></td>
                <td><input type="text" name="tipo_documento" value="<?php echo $row['tipo_documento']; ?>"></td>
                <td><input type="number" step="0.01" name="precio_base" value="<?php echo $row['precio_base']; ?>"></td>
                <td>
                    <button type="submit" name="actualizar_precio">Actualizar</button>
                    <button type="submit" name="eliminar_precio">Eliminar</button>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
