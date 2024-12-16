<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Book Title" value="{{ $book->title }}">
        <input type="date" name="published_at" placeholder="Book date of publish" value="{{ $book->published_at }}">
        <input type="text" name="genre" placeholder="Book Genre" value="{{ $book->genre }}">
        
        <select name="genre_book" id="genre">
            <option value="Acción" {{ $book->genre == 'Acción' ? 'selected' : '' }}></option>
            <option value="Terror" {{ $book->genre == 'Terror' ? 'selected' : '' }}></option>
            <option value="Comedia" {{ $book->genre == 'Comedia' ? 'selected' : '' }}></option>
            <option value="Aventura" {{ $book->genre == 'Aventura' ? 'selected' : '' }}></option>
            <option value="DramaAcción" {{ $book->genre == 'Drama' ? 'selected' : '' }}></option>
        </select>
        <button type="submit">Submit</button>
    </form>

</body>

</html>
