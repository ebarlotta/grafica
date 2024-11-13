<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Ejemplo Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el encabezado hero */
        .hero {
            background: url('fotos/quines somos.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
        }
        /* Estilo para las tarjetas */
        .card {
            margin: 20px 0;
            border: none; /* Sin borde para un aspecto más limpio */
            transition: transform 0.3s; /* Transición suave para la animación */
            height: 100%; /* Asegura que todas las tarjetas tengan la misma altura */
        }
        /* Colores de fondo para las tarjetas */
        .card-body {
            background-color: #f8f9fa; /* Fondo claro para contraste */
        }
        /* Efecto de animación al pasar el mouse */
        .card:hover {
            transform: scale(1.05); /* Aumenta el tamaño de la tarjeta */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Sombra para profundidad */
        }
        /* Estilo para las imágenes para que tengan una altura uniforme */
        .card-img-top {
            height: 200px; /* Altura fija para las imágenes */
            object-fit: cover; /* Asegura que la imagen cubra el área sin distorsionarse */
        }
        /* Estilo para el footer */
        .footer {
            background-color: #343a40; /* Color de fondo oscuro */
            color: white; /* Color del texto */
            padding: 20px 0; /* Espaciado vertical */
        }
    </style>
</head>
<body>
    <!-- Encabezado de la sección "Nosotros" -->
    <header class="hero text-center">
        <div class="container">
            <h1>Nuestra Historia</h1>
            <p>Conoce más sobre nosotros y nuestra misión</p>
        </div>
    </header>
    <div class="container mt-5">
        <!-- Sección sobre quiénes somos -->
        <h2>¿Quiénes somos?</h2>
        <p>Somos una empresa dedicada a ofrecer las mejores soluciones en tecnología. Nuestro equipo está compuesto por profesionales altamente capacitados y con una amplia experiencia en el sector.</p>
        <!-- Sección de misión -->
        <h3>Nuestra Misión</h3>
        <p>Proveer servicios de calidad que superen las expectativas de nuestros clientes, fomentando la innovación y el desarrollo sostenible.</p>
        <!-- Sección de valores -->
        <h3>Nuestros Valores</h3>
        <ul>
            <li>Integridad</li>
            <li>Innovación</li>
            <li>Compromiso</li>
            <li>Trabajo en equipo</li>
        </ul>
        <!-- Sección para conocer al equipo -->
        <h2>Conoce a Nuestro Equipo</h2>
        <div class="row">
            <!-- Tarjeta de cada miembro del equipo -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="fotos/gente 01.jpg" class="card-img-top" alt="Miembro del equipo">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Miembro</h5>
                        <p class="card-text">Descripción breve del miembro del equipo, su rol y experiencia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="fotos/gente 02.jpg" class="card-img-top" alt="Miembro del equipo">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Miembro</h5>
                        <p class="card-text">Descripción breve del miembro del equipo, su rol y experiencia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="fotos/gente 03.jpg" class="card-img-top" alt="Miembro del equipo">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Miembro</h5>
                        <p class="card-text">Descripción breve del miembro del equipo, su rol y experiencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón para regresar a la página principal -->
    <div class="text-center my-4">
        <a href="/" class="btn btn-primary">Regresar a la Página Principal</a>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
