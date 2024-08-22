<?php
include 'config.php';

// Crear
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['crear_convenio'])) {
    $nombre_institucion = $_POST['nombre_institucion'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $descuento_porcentaje = $_POST['descuento_porcentaje'];
    $sql = "INSERT INTO convenios (nombre_institucion, fecha_creacion, descuento_porcentaje) VALUES ('$nombre_institucion', '$fecha_creacion', '$descuento_porcentaje')";
    $conn->query($sql);
}

// Leer
$result = $conn->query("SELECT * FROM convenios");

// Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['actualizar_convenio'])) {
    $id = $_POST['id'];
    $nombre_institucion = $_POST['nombre_institucion'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $descuento_porcentaje = $_POST['descuento_porcentaje'];
    $sql = "UPDATE convenios SET nombre_institucion='$nombre_institucion', fecha_creacion='$fecha_creacion', descuento_porcentaje='$descuento_porcentaje' WHERE id=$id";
    $conn->query($sql);
}

// Eliminar
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar_convenio'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM convenios WHERE id=$id";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Convenios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Administrar Convenios</h1>
    <form method="post">
        <input type="text" name="nombre_institucion" placeholder="Nombre de la Institución" required>
        <input type="date" name="fecha_creacion" placeholder="Fecha de Creación" required>
        <input type="number" step="0.01" name="descuento_porcentaje" placeholder="Descuento (%)" required>
        <button type="submit" name="crear_convenio">Crear</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre de la Institución</th>
            <th>Fecha de Creación</th>
            <th>Descuento (%)</th>
            <th>Acciones</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form method="post">
                <td><?php echo $row['id']; ?></td>
                <td><input type="text" name="nombre_institucion" value="<?php echo $row['nombre_institucion']; ?>"></td>
                <td><input type="date" name="fecha_creacion" value="<?php echo $row['fecha_creacion']; ?>"></td>
                <td><input type="number" step="0.01" name="descuento_porcentaje" value="<?php echo $row['descuento_porcentaje']; ?>"></td>
                <td>
                    <button type="submit" name="actualizar_convenio">Actualizar</button>
                    <button type="submit" name="eliminar_convenio">Eliminar</button>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
