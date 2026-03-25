<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        //ORM = Eloquent <- Capa entre codigo y Base de Datos.
        $books = Book::all(); //
        //$books= "SELECT *FROM Books"; 
        return view('books', compact('books'));
    }   

    public function store(Request $request){
        $book = new Book();
        $book->name= $request->nombre;
        $book->price= $request->precio;
        $book->save();
        return redirect()->route('books.index');
    }

    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }

    public function edit($id){
        $book = Book::find($id);
        return view('books_edit', compact('book'));

    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->name= $request->nombre;
        $book->price= $request->precio;
        $book->save();
        return redirect()->route('books.index');

    }

    
}
