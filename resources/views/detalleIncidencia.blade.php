<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Incidencias</title>
</head>
<body>
    <div class="container">
        <h3>Detalle de la Incidencias</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Latitud</th>
                    <th scope="col"></th>Longitud</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $incidencia->latitud }}</td>
                    <td>{{ $incidencia->longitud }}</td>
                    <td>{{ $incidencia->ciudad }}</td>
                    <td>{{ $incidencia->direccion }}</td>
                    <td>{{ $incidencia->descripcion }}</td>
                    <td>{{ $incidencia->estado }}</td>
                    <td><a href="/">Volver</a></td>

                </tr>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>