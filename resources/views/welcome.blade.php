<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprenta</title>
    <!-- Enlace a la hoja de estilos de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para las tarjetas */
        .card {
            transition: transform 0.2s, box-shadow 0.5s;
        }
        .card:hover {
            transform: scale(1.10); /* Aumenta el tamaño ligeramente */
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3); /* Sombra más suave */
        }
        /* Estilos para el menú de navegación */
        .nav-link {
            transition: color 0.2s, background-color 0.2s; /* Transición suave */
            color: #030000; /* Color de texto por defecto (gris oscuro) */
        }
        .nav-link:hover {
            color: #ffffff; /* Cambia el color del texto al pasar el mouse */
            background-color: #0d05f3; /* Cambia el color de fondo al pasar el mouse */
            border-radius: 7px; /* Bordes redondeados */
        }
        .navbar {
            background-color: #0bef4f; /* Color de fondo claro para la barra de navegación */
        }
    </style>
    <!-- Enlace a Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
    <script>
    function initMap() {
        var location = {lat: -29.4142, lng: -66.8571}; // Coordenadas de San Martin 287, La Rioja, Argentina
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    </script>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-success fw-bold" href="#">Grafilar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="visually-hidden">(actual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('galeria') }}">Galería de Img.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('enviar') }}">Enviar Archivo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Encabezado con imagen de fondo -->
    <header class="bg-primary text-white text-center py-5 mb-4">
        <div class="container">
            <h1 class="font-weight-light">Bienvenido a nuestra Imprenta</h1>
        </div>
    </header>
    <!-- Carrusel de imágenes -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class=""></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class=""></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="fotos/carrucel_01.jpg" alt="Primera imagen">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="fotos/carrucel_02.jpg" alt="Segunda imagen">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="fotos/carrucel_03.jpg" alt="Tercera imagen">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="fotos/carrucel_04.jpg" alt="Cuarta imagen">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
    <!-- Contenedor principal -->
    <div class="container mt-4">
        <h2 class="mb-4">Nuestros Servicios</h2>
        <div class="row">
            <!-- Tarjeta de servicio 1 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-imprenta.jpg" alt="Impresión de documentos">
                    <div class="card-body">
                        <h4 class="card-title">Impresión Gráfica</h4>
                        <p class="card-text">Impresión con máquinas de gran formato Offset.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 2 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-deco.jpg" alt="Diseño gráfico">
                    <div class="card-body">
                        <h4 class="card-title">Diseño gráfico</h4>
                        <p class="card-text">Diseños creativos y personalizados.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 3 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-folletos.jpg" alt="Folletería">
                    <div class="card-body">
                        <h4 class="card-title">Folletos</h4>
                        <p class="card-text">Folletos publicitarios en distintas medidas.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 4 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-libros.jpg" alt="Impresión de carteles">
                    <div class="card-body">
                        <h4 class="card-title">Impresión de carteles</h4>
                        <p class="card-text">Carteles de alta calidad para todas tus necesidades.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 5 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-merchan.jpg" alt="Merchandising">
                    <div class="card-body">
                        <h4 class="card-title">Merchandising</h4>
                        <p class="card-text">Productos para identificación empresarial y artículos publicitarios.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 6 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-rotulacion.jpg" alt="Rotulación">
                    <div class="card-body">
                        <h4 class="card-title">Rotulación</h4>
                        <p class="card-text">Rápido y eficiente para todas tus necesidades de copiado.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 7 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="fotos/imagen-cajas.jpg" alt="Bolsas y Cajas">
                    <div class="card-body">
                        <h4 class="card-title">Bolsas y Cajas</h4>
                        <p class="card-text">Fabricación de bolsas y cajas especiales a medida.</p>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de servicio 8 -->
            <div class="col-xl-3 col-sm-6 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="{{ route('enviar') }}" style="text-decoration: none;">
                        <img class="card-img-top" src="fotos/enviar.jpg" alt="Enviar">
                        <div class="card-body">
                        <h4 class="card-title">Enviar</h4>
                            <p class="card-text">Enviar archivos para el servicio de impresión.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección del mapa -->
    <div class="container mt-4 mb-4">
        <h2 class="mb-4">Ubicación</h2>
        <div id="map" style="height: 400px; width: 100%; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" alt="" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Se produjo un error.</div><div class="gm-err-message">Esta página no cargó bien Google Maps. Consulta la consola de JavaScript para obtener los detalles técnicos.</div></div></div></div></div>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Grafilar</h5>
                    <p>
                        Tu imprenta de confianza en La Rioja, Argentina. Ofrecemos una amplia gama de servicios de impresión y diseño gráfico.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Enlaces</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-dark">Inicio</a></li>
                        <li><a href="#" class="text-dark">Servicios</a></li>
                        <li><a href="#" class="text-dark">Nosotros</a></li>
                        <li><a href="#" class="text-dark">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="text-dark">San Martin 287, La Rioja, Argentina</li>
                        <li class="text-dark">Tel: +54 380 123456</li>
                        <li class="text-dark">Email: contacto@grafilar.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Grafilar. Todos los derechos reservados.
        </div>
    </footer>
    <!-- Enlaces a JavaScript de Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


<div style="position: absolute; left: 0px; top: -2px; height: 1px; overflow: hidden; visibility: hidden; width: 1px;"><span style="position: absolute; font-size: 300px; width: auto; height: auto; margin: 0px; padding: 0px; font-family: Roboto, Arial, sans-serif;">BESbswy</span></div></body>
    <!-- Enlaces a JavaScript de Bootstrap 5 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
=======
        </div>


        {{--  INICIO DEL FORMULARIO ENVIO DE ARCHIVOS  --}}

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
>>>>>>> 1d19b78e5e4da27941b8a0dfcf42c56b0f080836
</html>
