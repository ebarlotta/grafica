<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Grafilar</title>
        <style>
            /* Centrar el modal verticalmente */

            .modal-dialog {
                display: flex;
                align-items: center;
                min-height: calc(100vh - 1rem);
            }
        </style>
    </head>



<h2 class="row justify-content-center">GALERIA DE TRABAJOS</h2>

{{--  INICIO DE GALERIA DE IMAGEN  --}}


    <style>
        .gallery-img {
            width: 100%;
            height: auto;
            max-height: 200px; /* Ajusta esta altura máxima según tus necesidades */
            object-fit: contain; /* Asegura que la imagen se ajuste dentro del contenedor sin recortarse */
            border: 2px solid #000; /* Agrega un borde negro de 2px */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); /* Agrega una sombra desplazada */
            padding: 5px; /* Espacio entre la imagen y el borde */
            transition: transform 0.3s ease-in-out; /* Añade una transición suave */
        }

        .gallery-img:hover {
            transform: scale(1.10); /* Aumenta ligeramente el tamaño de la imagen */
        }

    </style>


    <div class="container mt-5">
        <div class="row ms-3 me-3">
            <!-- Fila 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/Libros 01.jpg') }}" alt="Imagen 1" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/Libros 02.jpg') }}" alt="Imagen 2" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/Libros 03.jpg') }}" alt="Imagen 3" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/Libros 04.jpg') }}" alt="Imagen 4" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/Libros 05.jpg') }}" alt="Imagen 5" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/Libros 06.jpg') }}" alt="Imagen 6" class="gallery-img img-fluid mb-3">
            </div>
            <!-- Fila 2 -->
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/remeras 01.jpg') }}" alt="Imagen 7" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/remeras 02.jpg') }}" alt="Imagen 8" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/remeras 03.jpg') }}" alt="Imagen 9" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/remeras 04.jpg') }}" alt="Imagen 10" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/remeras 05.jpg') }}" alt="Imagen 11" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/mercha 01.jpg') }}" alt="Imagen 12" class="gallery-img img-fluid mb-3">
            </div>
            <!-- Fila 3 -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 01.jpg') }}" alt="Imagen 14" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 02.jpg') }}" alt="Imagen 15" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 03.jpg') }}" alt="Imagen 16" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 04.jpg') }}" alt="Imagen 17" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 05.jpg') }}" alt="Imagen 18" class="gallery-img img-fluid mb-3">
            </div>
            <!-- Fila 4 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 06.jpg') }}" alt="Imagen 19" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/estampado 07.jpg') }}" alt="Imagen 20" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/cajas 01.jpg') }}" alt="Imagen 21" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/cajas 02.jpg') }}" alt="Imagen 22" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/cajas 03.jpg') }}" alt="Imagen 23" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/tarjetas 01.jpg') }}" alt="Imagen 24" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/ploter 01.jpg') }}" alt="Imagen 25" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/ploter 02.jpg') }}" alt="Imagen 26" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/rotulacion 01.jpg') }}" alt="Imagen 27" class="gallery-img img-fluid mb-3">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 mb-3">
                <img src="{{ asset('fotos/etiquetas 01.jpg') }}" alt="Imagen 28" class="gallery-img img-fluid mb-3">
            </div>

        </div>
    </div>

{{--  FIN DE GALERIA DE IMAGENES  --}}
