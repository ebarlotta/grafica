<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Ejemplo Bootstrap</title>
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el encabezado de la sección de servicios */
        .hero {
            background: url('/fotos/mercha 02.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        /* Estilo para las tarjetas de servicios */
        .card {
            margin: 20px 0;
            border: none;
            transition: transform 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .card-body {
            flex: 1;
        }
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
        /* Efecto de animación al pasar el mouse */
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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
    <!-- Encabezado de la sección "Servicios" -->
    <header class="hero">
        <div class="container">
            <h1>Nuestros Servicios</h1>
            <p>Ofrecemos soluciones innovadoras para satisfacer tus necesidades.</p>
        </div>
    </header>

    <!-- Contenedor principal de servicios -->
    <div class="container mt-5">
        <h2 class="text-center">Servicios Destacados</h2>
        <div class="row">
            <!-- Servicio 1 -->
            <div class="col-md-4 d-flex">
                <div class="card">
                    <img src="/fotos/fotocopiadora.jpg" class="card-img-top" alt="Fotocopias">
                    <div class="card-body">
                        <h5 class="card-title">Fotocopias</h5>
                        <p class="card-text">Hacemos para vos esas fotocopias que siempre estás necesitando, fácil, de calidad y encuadernado de la forma que te gusta.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 2 -->
            <div class="col-md-4 d-flex">
                <div class="card">
                    <img src="/fotos/encuadernacion.jpg" class="card-img-top" alt="Encuadernación">
                    <div class="card-body">
                        <h5 class="card-title">Encuadernación</h5>
                        <p class="card-text">Tenemos diversos sistemas de encuadernación. Elige el que más se adecue a tus expectativas.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 3 -->
            <div class="col-md-4 d-flex">
                <div class="card">
                    <img src="/fotos/servicios varios.jpg" class="card-img-top" alt="Varios">
                    <div class="card-body">
                        <h5 class="card-title">Servicios varios</h5>
                        <p class="card-text">Descripción breve del Servicio 3. Explicación sobre cómo puede beneficiar a los clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2023 Tu Empresa. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

