<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="">
        <div class="">
            <form action="{{ route('author_books.store') }}" method="post">
                @csrf

                <div class="">
                    <label for="book">Selecciona un Libro</label>
                    <select name="book" id="book" class="">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="">
                    <label for="author">Selecciona un Autor</label>
                    <select name="author" id="author" class="">
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="">
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>

        <h1 class="mt-5">Listado de relaciones</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Libro</th>
                    <th>Autor</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($author_books as $author_book)
                    <tr>
                        <td>{{ $author_book->id }}</td>
                        <td>
                            @foreach ($books as $book)
                                @if ($book->id == $author_book->id_book)
                                    {{ $book->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @foreach ($authors as $author)
                                @if ($author->id == $author_book->id_author)
                                    {{ $author->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $author_book->fecha }}</td>
                        <td>
                            <a href="{{ route('author_books.edit', $author_book->id) }}" class="btn btn-warning">Editar</a>

                            <form action="{{ route('author_books.destroy', $author_book->id) }}" method="post" style="display:inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>