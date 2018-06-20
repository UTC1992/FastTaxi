<div class="container">
    <form class="form-horizontal" action="/cooperativa/create" method="post">
        {{ csrf_field() }}
        <div class="">
            <label>Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="" required>
        </div>
        <div class="">
            <label>Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="" required>
        </div>
        <div class="">
            <label>Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="" required>
        </div>
        <div class="">
            <label>Razón Social:</label>
            <input type="text" id="razonsocial" name="razonsocial" value="" required>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>