<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Grafilar</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el encabezado de la sección de contacto */
        .hero {
            background: url('fotos/contacto.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        /* Estilo para el formulario de contacto */
        .contact-form {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        /* Estilo para el footer */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Encabezado de la sección "Contacto" -->
    <header class="hero">
        <div class="container">
            <h1>Contáctanos</h1>
            <p>Estamos aquí para ayudarte. Envía tus consultas, comentarios o sugerencias.</p>
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <!-- Formulario de contacto -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h3>Formulario de Contacto</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <input type="text" class="form-control" id="subject" placeholder="Asunto">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tu mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
            <!-- Información de contacto -->
            <div class="col-md-6">
                <h3>Información de Contacto</h3>
                <p><strong>Dirección:</strong> San Martin 287, La Rioja, Argentina *</p>
                <p><strong>Teléfono:</strong> +54 380 4250007</p>
                <p><strong>Email:</strong>grafiar@gmail.com</p>
                <h3>Ubicación</h3>
                <div id="map" style="height: 300px;"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 Grafilar. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Enlaces a JavaScript de Bootstrap y Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>
    <script>
    function initMap() {
        var location = {lat: -29.41690, lng: -66.85762};
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location
        });
