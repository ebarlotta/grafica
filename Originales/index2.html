<?php
include 'config.php';
$clientes = $conn->query("SELECT * FROM clientes");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .dropzone {
            border: 2px dashed #007bff;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            background-color: #e9ecef;
            border-radius: 5px;
        }
        .dropzone:hover {
            background-color: #dfe3e6;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Subida de Archivos</h1>
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <select class="form-select" id="cliente" name="cliente" required>
                    <option value="">Selecciona un cliente</option>
                    <?php while ($row = $clientes->fetch_assoc()): ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <!-- Resto del formulario -->
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('dropzone').addEventListener('click', function() {
            document.getElementById('archivo').click();
        });
        document.getElementById('archivo').addEventListener('change', function() {
            document.getElementById('dropzone').innerText = this.files[0].name;
        });
    </script>
</body>
</html>
