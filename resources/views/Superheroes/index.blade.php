<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes table</title>
</head>
<body>
    <h1>Superheroes</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>universe_id</th>
                <th>gender_id</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>picture</th>
            </tr>
        </thead>

        <tbody>
            @foreach($superheroes as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->universe_id}}</td>
                <td>{{$item->gender_id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->real_name}}</td>
                <td><img src="{{$item->picture}}" alt="{{$item->name}}" width="100"></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    
</body>
</html>