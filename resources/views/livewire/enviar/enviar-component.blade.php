<div>
    <div class="row">
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" wire:model="nombre" placeholder="Escribe tu Nombre">
        </div>
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="telefono">Teléfono:</label>
            <input type="text" class="form-control" wire:model="telefono" placeholder="Teléfono">
        </div>
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="direccion">Dirección:</label>
            <input type="text" class="form-control" wire:model="direccion" placeholder="Dirección">
        </div>
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="dni">DNI:</label>
            <input type="text" class="form-control" wire:model="dni" placeholder="DNI">
        </div>
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="CUIT">CUIT:</label>
            <input type="text" class="form-control" wire:model="cuit" placeholder="CUIT">
        </div>
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="institucion">Institución:</label>
            <input type="text" class="form-control" wire:model="institucion" placeholder="Institución">
        </div>
        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="email">Email:</label>
            <input type="email" class="form-control" wire:model="email" placeholder="Email">
        </div>

        <form wire:submit.prevent="save">
            <div class="form-group col-md-12 mb-2 btn btn-warning">
                <label for="archivo">Déjanos tu archivo:</label>
                <input type="file" wire:model="photo">
                @error('photo') <span class="error">{{ $message }}</span> @enderror
                {{-- <input type="file" class="form-control" id="archivo"> --}}
            </div>
            <button type="submit">Save Photo</button>
        </form>

        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="cantidadhojas">Cantidad de Hojas:</label>
            <input type="number" class="form-control" wire:model="cantidadhojas" placeholder="Cantidad de Hojas">
        </div>

        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="tipoImpresion">Tipo de Impresión:</label>
            <select id="tipoImpresion" class="form-control" wire:model="tipodeimpresion">
                <option selected>Seleccionar...</option>
                <option value="1">Laser color</option>
                <option value="2">Laser B/N</option>
            </select>
        </div>

        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="tamanoPapelCliente">Tamaño de Papel:</label>
            <select class="form-control" wire:model="tamanopapel">
                <option selected>Seleccionar...</option>
                <option value="1">A5</option>
                <option value="2">A4</option>
                <option value="3">A3</option>
                <option value="4">Legal</option>
                <option value="5">1/2 Oficio</option>
                <option value="6">Oficio</option>
            </select>
        </div>

        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="tipodepapel">Tipo de Papel:</label>
            <select class="form-control" wire:model="tipodepapel">
                <option selected>Seleccionar...</option>
                <option value="1">Obra de 80 Grs</option>
                <option value="2">Obra de 90 Grs</option>
                <option value="3">Obra de 115 Grs</option>
            </select>
        </div>

        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="simpleDobleFas">Simple o Doble Faz:</label>
            <select class="form-control" wire:model="frentedorso">
                <option selected>Seleccionar...</option>
                <option value="1">Simple Faz</option>
                <option value="2">Doble Faz</option>
            </select>
        </div>

        <div class="form-group col-sm-12 col-lg-6 col-xl-4 mb-2">
            <label for="cantidadEjemplares">Cantidad de Ejemplares:</label>
            <input type="number" class="form-control"  wire:model="cantidadejemplares" placeholder="Cantidad de Ejemplares">
        </div>

        <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3 mb-2">
            <div class="form-check">
                <input class="form-check-input" type="radio" wire:model="retiraenlocal" checked>
                <label class="form-check-label" for="homePickup">Retira por El Local</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" wire:model="geoposicion">
                <label class="form-check-label" for="deliveryService">Enviar por delivery $</label>
            </div>
        </div>

        <div class="form-group col-sm-12 col-md-12 col-lg-4 mt-3 mb-2">
            <label for="cantidadEjemplares">Observaciones:</label>
            <textarea name="" id="" cols="60" rows="2">{{ $observaciones }}</textarea>
        </div>
    </div>
 
    <div class="row mt-3">
        <div class="col-sm-12 col-md-12 col-lg-4 btn btn-danger">
            <h4 class="marg">Costo Aprox: $ {{ $costoaprox }}</h4>
        </div>
        
        <div class="col-md-8">
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
        </div>
    </div>
</div>
