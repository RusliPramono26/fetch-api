<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Pokemon</H1> 
    @if($dataPokemon->count())
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Base Experiece</th>
                    <th>Weight</th>
                    <th>Stat</th>
                    <th>Ability</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dataPokemon)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->weight }}</td>
                        <td>{{ $data->stat }}</td>
                        <td>{{ $data->ability }}</td>
                        <td>{{ $data->image }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        
    @endif

</body>
</html>