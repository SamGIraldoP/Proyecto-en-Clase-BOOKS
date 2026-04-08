<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar relación</title>
</head>
<body>

    <h1>Editar relación libro - autor</h1>

    <form action="{{ route('author_books.update', $author_book->id) }}" method="post">
        @csrf
        @method('put')

        <label for="book">Selecciona un Libro</label>
        <select name="book" id="book">
            @foreach ($books as $book)
                <option value="{{ $book->id }}" {{ $book->id == $author_book->id_book ? 'selected' : '' }}>
                    {{ $book->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label for="author">Selecciona un Autor</label>
        <select name="author" id="author">
            @foreach ($authors as $author)
                <option value="{{ $author->id }}" {{ $author->id == $author_book->id_author ? 'selected' : '' }}>
                    {{ $author->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label for="fecha">Fecha</label>
        <input type="date" name="fecha" id="fecha" value="{{ $author_book->fecha }}">

        <br><br>

        <button type="submit">Actualizar relación</button>
    </form>

</body>
</html>