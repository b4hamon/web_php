<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Author</h1>
    
    <ul>
        <div>
            <form action="{{route('authors.store')}}" method="post">
                @csrf
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">

                <label for="Nacinalty">Nacionalidad</label>
                <input type="text" name="nationality" id="nationality">
                
                <label for="birth_day">Feche de nacimiento</label>
                <input type="date" name="birth_date" id="birth_date">

                <input type="submit" value="Guardar">
            </form>
        </div>
    </ul>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th>Cumpleaños</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id}}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->nationality}}</td>
                    <td>{{ $author->birth_date}}</td>
                    <td>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('authors.edit', $author->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
    </table>
</body>
</html>
