<div>
    <input type="button" value="Agregar" class="btn btn-success">
    <table class="table table-striped">
        <tr>
            <td>Nombre</td>
            <td>Activo</td>
            <td>Opción</td>
        </tr>
        @foreach($tipos as $tipo)
        <tr>
            <td>{{ $tipo->nombre }}</td>
            <td>{{ $tipo->activo }}</td>
            <td>Opciones</td>
        </tr>
        @endforeach
    </table>
</div>
