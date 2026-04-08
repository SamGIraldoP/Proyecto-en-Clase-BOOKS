<?php

namespace App\Http\Controllers;

use App\Models\AuthorBook;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $author_books = AuthorBook::all();
        $books = Book::all();
        $authors = Author::all();
        return view ('author_books', compact('author_books','books','authors'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author_book = new AuthorBook;
        $author_book -> id_author = $request->author;
        $author_book -> id_book = $request->book;
        $author_book -> fecha = $request->fecha;
        $author_book -> save();
        return redirect()-> route('author_books.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(AuthorBook $authorBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author_book = AuthorBook::find($id);
        $books = Book::all();
        $authors = Author::all();

        return view('author_books_edit', compact('author_book', 'books', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AuthorBook $authorBook, string $id)
    {
        $author_book = AuthorBook::find($id);
        $author_book->id_author = $request->author;
        $author_book->id_book = $request->book;
        $author_book->fecha = $request->fecha;
        $author_book->save();

        return redirect()->route('author_books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $author_book = AuthorBook::find($id);
        $author_book->delete();

        return redirect()->route('author_books.index');
    }

    
}
