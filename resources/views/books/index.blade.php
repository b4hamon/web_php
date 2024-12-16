<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>book</h1>
    
    <ul>
        <div>
            <form action="{{route('books.store')}}" method="post">
                @csrf
                <label for="title">Titulo</label>
                <input type="text" title="title" id="title">

                <label for="published_at">Fecha publicacion</label>
                <input type="date" title="published_at" id="published_at">
                
                <label for="genre">Genero</label>
                <input type="text" title="genre" id="genre">

                <input type="submit" value="Guardar">
            </form>
        </div>
    </ul>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Fecha publicacion</th>
                <th>genero</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id}}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->published_at}}</td>
                    <td>{{ $book->genre}}</td>
                    <td>
                        <form action="{{ route('books.destroy', $book->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
    </table>
</body>
</html>