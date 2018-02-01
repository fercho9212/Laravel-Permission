<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Modulo de notas</h1>
    @foreach($notes as $note)
        {{$note->title}} 
    @endforeach
    <table>
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th><center>Eliminar</center></th>
        </thead>
        <tbody>
                @foreach($notes as $note)
                        <tr>
                            <td>{{$note->id}}</td>
                            <td>{{$note->title}}</td>
                            <td>
                                @can('destroy_notes')
                                    <a href="{{ route('notes.destroy', $note->id) }}">Eliminar nota</a>
                                @else
                                    Usted no puede eliminar esta nota
                                @endcan
                            </td>
                        </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>