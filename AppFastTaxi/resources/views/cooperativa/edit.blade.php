<div class="container">
        <form class="form-horizontal" action="{{ route('cooperativa.update',$cooperativa->idcooperativa) }}" method="post">
            {{ csrf_field() }}
            <div class="">
                <label>Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $cooperativa->nombre_coperativa }}" required>
            </div>
            <div class="">
                <label>Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ $cooperativa->direccion }}" required>
            </div>
            <div class="">
                <label>Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="{{ $cooperativa->telefono }}" required>
            </div>
            <div class="">
                <label>Razón Social:</label>
                <input type="text" id="razonsocial" name="razonsocial" value="{{ $cooperativa->razon_social }}" required>
            </div>
            <div class="">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>