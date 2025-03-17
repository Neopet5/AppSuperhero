<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universe Table</title>
</head>
<body>
        <h1>Universe</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>

                    <th>Name</th>

                </tr>

                <thead>

            <tbody>

            @foreach($universes as $universe)

                <tr>

                <td>{{ $universe -> id}} </td>

                <td>{{ $universe -> name}}</td>

                </tr>

            @endforeach

            </tbody>

        </table>
</body>
</html>