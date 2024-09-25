<div>
    <style>
        /* Centrar el modal verticalmente */

        .modal-dialog {
            display: flex;
            align-items: center;
            min-height: calc(100vh - 1rem);
        }
    </style>

        <!-- Modal Nuevo -->
        <div class="modal fade" id="mainModal" tabindex="-1" aria-labelledby="mainModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mainModalLabel">Elige tu opción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#primeravezModal" class="btn btn-danger mt-3 fw-bold" style="width: 200px; height: 55px;" data-bs-dismiss="modal"  aria-label="Close">Mi Primera Vez</button>
                        </div>
                        <div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#soyClienteModal" class="btn btn-primary mt-3 fw-bold" style="width: 200px; height: 55px;">Ya Soy Cliente</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">* Salir *</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCION Primeravez -->
        <div class="modal fade" id="primeravezModal" tabindex="-1" aria-labelledby="primeravezModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="primeravezModalLabel">FORMULARIO DE ENVIO DE ARCHIVOS - PRIMERA VEZ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h3 class="mb-4 btn btn-danger">Tus datos para conocerte</h3>
                            <form id="primeravezForm">
                                <div class="row">
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Escribe tu Nombre">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="telefono">Teléfono:</label>
                                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="direccion">Dirección:</label>
                                        <input type="text" class="form-control" id="direccion" placeholder="Dirección">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="dni">DNI:</label>
                                        <input type="text" class="form-control" id="dni" placeholder="DNI">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="institucion">Institución:</label>
                                        <input type="text" class="form-control" id="institucion" placeholder="Institución">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12 mb-2 btn btn-warning">
                                        <label for="archivo">Déjanos tu archivo:</label>
                                        <input type="file" class="form-control" id="archivo">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="cantidadHojas">Cantidad de Hojas:</label>
                                        <input type="number" class="form-control" id="cantidadHojas" placeholder="Cantidad de Hojas">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="tipoImpresion">Tipo de Impresión:</label>
                                        <select id="tipoImpresion" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Laser color</option>
                                            <option>Laser B/N</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="tipoPapel">Tipo de Papel:</label>
                                        <select id="tipoPapel" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Obra de 80 Grs</option>
                                            <option>Obra de 90 Grs</option>
                                            <option>Obra de 115 Grs</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="simpleDobleFas">Simple o Doble Faz:</label>
                                        <select id="simpleDobleFas" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Simple Faz</option>
                                            <option>Doble Faz</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="cantidadEjemplares">Cantidad de Ejemplares:</label>
                                        <input type="number" class="form-control" id="cantidadEjemplares" placeholder="Cantidad de Ejemplares">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptions" id="homePickup" value="homePickup" checked>
                                            <label class="form-check-label" for="homePickup">Retira por El Local</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptions" id="deliveryService" value="deliveryService">
                                            <label class="form-check-label" for="deliveryService">Enviar por delivery $</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-4 btn btn-danger">
                                        <h4 class="marg">Costo Aprox: $5780.45</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCION Soy Cliente -->
        <div class="modal fade" id="soyClienteModal" tabindex="-1" aria-labelledby="soyClienteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="soyClienteModalLabel">FORMULARIO DE YA SOY CLIENTE</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <!-- <h3 class="mb-4 btn btn-primary">** YA SOY CLIENTE **</h3> -->

                            <form class="row-flex">
                                <button class="form-group btn btn-outline-back col-3 me-2  mb-2 btn btn-primary" type="submit">Buscar</button>
                                <input class="form-group form-control col-9 mb-3" type="search" placeholder="Buscar por DNI, Telefono o por Mail" aria-label="Search">
                            </form>



                            <form id="soyClienteForm">
                                <div class="row">
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="nombreCliente">Nombre:</label>
                                        <input type="text" disabled class="form-control" id="nombreCliente" placeholder="Escribe tu Nombre">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="telefonoCliente">Teléfono:</label>
                                        <input type="text" disabled class="form-control" id="telefonoCliente" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="direccionCliente">Dirección:</label>
                                        <input type="text" disabled class="form-control" id="direccionCliente" placeholder="Dirección">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="dniCliente">DNI:</label>
                                        <input type="text" disabled class="form-control" id="dniCliente" placeholder="DNI">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="institucionCliente">Institución:</label>
                                        <input type="text" disabled class="form-control" id="institucionCliente" placeholder="Institución">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="emailCliente">Email:</label>
                                        <input type="email" disabled class="form-control" id="emailCliente" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-12 mb-2 btn btn-warning">
                                        <label for="archivoCliente">Déjanos tu archivo:</label>
                                        <input type="file" class="form-control" id="archivoCliente">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="cantidadHojasCliente">Cantidad de Hojas:</label>
                                        <input type="number" class="form-control" id="cantidadHojasCliente" placeholder="Cantidad de Hojas">
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="tipoImpresionCliente">Tipo de Impresión:</label>
                                        <select id="tipoImpresionCliente" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Laser color</option>
                                            <option>Laser B/N</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="tipoPapelCliente">Tipo de Papel:</label>
                                        <select id="tipoPapelCliente" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Obra de 80 Grs</option>
                                            <option>Obra de 90 Grs</option>
                                            <option>Obra de 115 Grs</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="simpleDobleFasCliente">Simple o Doble Faz:</label>
                                        <select id="simpleDobleFasCliente" class="form-control">
                                            <option selected>Seleccionar...</option>
                                            <option>Simple Faz</option>
                                            <option>Doble Faz</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-12  col-lg-6 col-xl-4 mb-2">
                                        <label for="cantidadEjemplaresCliente">Cantidad de Ejemplares:</label>
                                        <input type="number" class="form-control" id="cantidadEjemplaresCliente" placeholder="Cantidad de Ejemplares">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3 mb-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptionsCliente" id="homePickupCliente" value="homePickupCliente" checked>
                                            <label class="form-check-label" for="homePickupCliente">Retira por El Local</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="deliveryOptionsCliente" id="deliveryServiceCliente" value="deliveryServiceCliente">
                                            <label class="form-check-label" for="deliveryServiceCliente">Enviar por delivery $</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-12 col-lg-4 btn btn-danger">
                                        <h4 class="marg">Costo Aprox: $5780.45</h4>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="reset" class="btn btn-warning mt-3">Limpiar campos</button>
                                        <button type="submit" class="btn btn-primary mt-3">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Mostrar el modal principal al cargar la página
            document.addEventListener('DOMContentLoaded', function() {
                var mainModal = new bootstrap.Modal(document.getElementById('mainModal'));
                mainModal.show();
            });

            // Función para regresar al modal principal
            function showMainModal() {
                var mainModal = new bootstrap.Modal(document.getElementById('mainModal'));
                mainModal.show();
                // Ocultar el modal actual
                var currentModal = bootstrap.Modal.getInstance(document.querySelector('.modal.show'));
                currentModal.hide();
            }

            // Manejar el envío del formulario de "Mi Primera Vez"
            document.getElementById('primeravezForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevenir el envío real del formulario
                showMainModal(); // Regresar al modal principal
            });

            // Manejar el envío del formulario de "Ya Soy Cliente"
            document.getElementById('soyClienteForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevenir el envío real del formulario
                showMainModal(); // Regresar al modal principal
            });
        </script>
</div>
