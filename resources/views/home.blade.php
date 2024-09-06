@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        {{--  desde aca se costruye la pagina  --}}

        {{--  INICIO DE LA BARRA DE MENU  --}}

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Menu Barra</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Otra *</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Mas Opciones
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Apagado</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Escriba" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>

        {{--  FIN DE LA BARRA DE MENU  --}}

        {{-- INICIO DEL  CARRUCEL  --}}
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('fotos/carrucel_01.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('fotos/carrucel_02.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('fotos/carrucel_03.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        {{--  FIN DEL CARRUCEL  --}}

        {{-- INCIO DE BOTONNES   --}}


    {{--  <style>
        .btn-custom {
            width: 200px;
            height: 200px;
            margin: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-custom img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>  --}}

<body>
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-6 col-md-3">
                <button class="btn btn-primary btn-custom">
                    <img src="{{ asset('fotos/imagen-imprenta.jpg') }}" alt="Imprenta">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-secondary btn-custom">
                    <img src="{{ asset('fotos/imagen-rotulacion.jpg') }}" alt="Rotulación">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-success btn-custom">
                    <img src="{{ asset('fotos/imagen-cajas.jpg') }}" alt="Cajas y Bolsas">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-danger btn-custom">
                    <img src="{{ asset('fotos/imagen-merchan.jpg') }}" alt="Merchandising">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-warning btn-custom">
                    <img src="{{ asset('fotos/imagen-deco.jpg') }}" alt="Decoración">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-info btn-custom">
                    <img src="{{ asset('fotos/imagen-folletos.jpg') }}" alt="Folletos">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-light btn-custom">
                    <img src="{{ asset('fotos/imagen-revista.jpg') }}" alt="Revistas">
                </button>
            </div>
            <div class="col-6 col-md-3">
                <button class="btn btn-dark btn-custom">
                    <img src="{{ asset('fotos/imagen-libros.jpg') }}" alt="Libros">
                </button>
            </div>
        </div>
    </div>



        {{--  FIN DE BOTONES   --}}

        <h2 class="row justify-content-center">GALERIA DE TRABAJOS</h2>

        {{--  INICIO DE GALERIA DE IMAGEN  --}}


            <style>
                .gallery-img {
                    width: 100%;
                    height: auto;
                    padding: 5px;
                }
            </style>

            <div class="container mt-5">
                <div class="row">
                    <!-- Fila 1 -->
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen1.jpg') }}" alt="Imagen 1" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen2.jpg') }}" alt="Imagen 2" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen3.jpg') }}" alt="Imagen 3" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen4.jpg') }}" alt="Imagen 4" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen5.jpg') }}" alt="Imagen 5" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen6.jpg') }}" alt="Imagen 6" class="gallery-img">
                    </div>
                    <!-- Fila 2 -->
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen7.jpg') }}" alt="Imagen 7" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen8.jpg') }}" alt="Imagen 8" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen9.jpg') }}" alt="Imagen 9" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen10.jpg') }}" alt="Imagen 10" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen11.jpg') }}" alt="Imagen 11" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen12.jpg') }}" alt="Imagen 12" class="gallery-img">
                    </div>
                    <!-- Fila 3 -->
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen13.jpg') }}" alt="Imagen 13" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen14.jpg') }}" alt="Imagen 14" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen15.jpg') }}" alt="Imagen 15" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen16.jpg') }}" alt="Imagen 16" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen17.jpg') }}" alt="Imagen 17" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen18.jpg') }}" alt="Imagen 18" class="gallery-img">
                    </div>
                    <!-- Fila 4 -->
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen19.jpg') }}" alt="Imagen 19" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen20.jpg') }}" alt="Imagen 20" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen21.jpg') }}" alt="Imagen 21" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen22.jpg') }}" alt="Imagen 22" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen23.jpg') }}" alt="Imagen 23" class="gallery-img">
                    </div>
                    <div class="col-6 col-md-2">
                        <img src="{{ asset('fotos/imagen24.jpg') }}" alt="Imagen 24" class="gallery-img">
                    </div>
                </div>
            </div>

        {{--  FIN DE GALERIA DE IMAGENES  --}}

        {{--  Incio del Footer  --}}

        <footer class="bg-dark text-white pt-4">
            <div class="container">
                <div class="row">
                    <!-- Datos Útiles -->
                    <div class="col-md-3">
                        <h5>Datos Útiles</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white" target="_blank">Sumate a nuestro Staff</a></li>
                            <li><a href="#" class="text-white" target="_blank">Descargar Brochure Institucional</a></li>
                            <li><a href="#" class="text-white" target="_blank">Club Pyme / Distribuidores</a></li>
                            <li><a href="#" class="text-white" target="_blank">Datos Bancarios</a></li>
                            <li><a href="#" class="text-white" target="_blank">Tutoriales</a></li>
                            <li><a href="#" class="text-white" target="_blank">Diseño web</a></li>
                            <li><a href="#" class="text-white" target="_blank">Envíos</a></li>
                            <li><a href="#" class="text-white" target="_blank">Newsletter</a></li>
                            <li><a href="#" class="text-white" target="_blank">Order Tracking</a></li>
                            <li><a href="#" class="text-white" target="_blank">Reclamos</a></li>
                            <li><a href="#" class="text-white" target="_blank">Política de Privacidad</a></li>
                        </ul>
                    </div>
                    <!-- Contáctenos -->
                    <div class="col-md-3">
                        <h5>Contáctenos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white" target="_blank">Facebook</a></li>
                            <li><a href="#" class="text-white" target="_blank">Instagram</a></li>
                            <li><a href="#" class="text-white" target="_blank">Telegram</a></li>
                            <li><a href="#" class="text-white" target="_blank">WhatsApp</a></li>
                            <li><a href="#" class="text-white" target="_blank">Mensajes Internos</a></li>
                        </ul>
                    </div>
                    <!-- Mi Cuenta -->
                    <div class="col-md-3">
                        <h5>Mi Cuenta</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white" target="_blank">Inicio de Sesión</a></li>
                            <li><a href="#" class="text-white" target="_blank">Registrarme</a></li>
                        </ul>
                    </div>
                    <!-- Ubicación -->
                    <div class="col-md-3">
                        <h5>Ubicación</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white" target="_blank">San Martin 286, La Rioja, Argentina</a></li>
                            <li><a href="#" class="text-white" target="_blank">Cómo Llegar</a></li>
                        </ul>
                        <div id="mapa" style="height: 200px;">
                            <!-- Aquí puedes insertar el iframe de Google Maps -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.923456789!2d-66.856748!3d-29.411234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDI0JzQwLjQiUyA2NsKwNTEnMjAuOCJX!5e0!3m2!1ses!2sar!4v1633021234567!5m2!1ses!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        {{--  Fin del Footer  --}}


        {{--  fin de la Pagina   --}}

    </div>
</div>
@endsection
