<div>
    <h1>Administrar Precios</h1>
    <form method="post">
        <input type="text" name="tipo_documento" placeholder="Tipo de Documento" required>
        <input type="number" step="0.01" name="precio_base" placeholder="Precio Base" required>
        <button type="submit" name="crear_precio">Crear</button>
    </form>
    <table border="1">
        <tr>
            <th>Tipo de Documento</th>
            <th>Precio Base</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <form method="post">
                <td><input type="text" name="tipo_documento" value=""></td>
                <td><input type="number" step="0.01" name="precio_base" value=""></td>
                <td>
                    <button type="submit" name="actualizar_precio">Actualizar</button>
                    <button type="submit" name="eliminar_precio">Eliminar</button>
                    <input type="hidden" name="id" value="">
                </td>
            </form>
        </tr>
    </table>
</div>
