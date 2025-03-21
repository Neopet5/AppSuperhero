<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genders Table</title>
</head>
<body>
        <h1>Genders Table</h1>

        <hr>

        <a href="{{ route('genders.create') }}"> Add a new Gender</a>

        <hr>

        <br>

        <table>
            <thead>
                <tr>
                    <th>Id</th>

                    <th>Name</th>

                </tr>

                <thead>

            <tbody>

            @foreach($gender as $item)

                <tr>

                <td>{{ $item -> id}} </td>

                <td>{{ $item -> name}}</td>

                <td>

                <a href = "{{route ('genders.show',$item->id)}}">Show</a>

                <a href = "{{route ('genders.edit',$item->id)}}">Edit</a>

                <form action="{{ route('genders.destroy', $item->id) }}" method="post">

                        @csrf

                        @method('delete')

                        <input type="submit" value="Delete" onclick="return confirm('Are you really sure? There is no way back')">
          </form>
            </td>

                </tr>

            @endforeach

            </tbody>

        </table>
</body>
</html>