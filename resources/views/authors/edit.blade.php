<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('authors.update', $author->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="author Name" value="{{ $author->name }}">
        <input type="text" name="nationality" placeholder="author nationality" value="{{ $author->nationality }}">
        <input type="date" name="birth_date" placeholder="author birth_date" value="{{ $author->birth_date }}">
        <button type="submit" action>Guardar</button>
    </form>

</body>

</html>