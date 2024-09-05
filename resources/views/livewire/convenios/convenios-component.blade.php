<div>
    <h1>Administrar Convenios</h1>
    <form method="post">
        <input type="text" name="nombre_institucion" placeholder="Nombre de la Institución" required>
        <input type="date" name="fecha_creacion" placeholder="Fecha de Creación" required>
        <input type="number" step="0.01" name="descuento_porcentaje" placeholder="Descuento (%)" required>
        <button type="submit" name="crear_convenio">Crear</button>
    </form>
    <table border="1">
        <tr>
            <th>Nombre de la Institución</th>
            <th>Fecha de Creación</th>
            <th>Descuento (%)</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <form method="post">
                <td><input type="text" name="nombre_institucion" value=""></td>
                <td><input type="date" name="fecha_creacion" value=""></td>
                <td><input type="number" step="0.01" name="descuento_porcentaje" value=""></td>
                <td>
                    <button type="submit" name="actualizar_convenio">Actualizar</button>
                    <button type="submit" name="eliminar_convenio">Eliminar</button>
                </td>
            </form>
        </tr>
    </table>
</div>
