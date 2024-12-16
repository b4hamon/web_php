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
        @foreach ($authors as $author)
            <li>{{ $author->name }}</li>
        @endforeach
    </ul>
</body>
</html>
