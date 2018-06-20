<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
            <h1>Hola mundo</h1>
            <div class="form-group">
                <a href="/cooperativa/new" class="btn btn-primary">
                    New
                </a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Razón Social</th>
                    <th>Acciones</th>
                </tr>
                @if($cooperativas->count())
                @foreach($cooperativas as $coop)
                    <tr>
                        <td>{{ $coop->nombre_coperativa }}</td>
                        <td>{{ $coop->direccion }}</td>
                        <td>{{ $coop->telefono }}</td>
                        <td>{{ $coop->razon_social }}</td>
                        <td>
                            <a href="/cooperativa/edit/{{ $coop->idcooperativa }}" class="btn btn-info">Edit</a>
                            <a href="/cooperativa/delete/{{ $coop->idcooperativa }}" class="btn btn-danger">Delet</a>
                            
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td>No existen registros por el momento.</td>
                    </tr>
                @endif
            </table>
    </div>
</body>
</html>