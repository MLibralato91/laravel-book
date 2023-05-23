<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        //$books = Book::all();
        //$books = Book::where('id', 2)->get();
        $books = Book::where('id', '>=', 0)->orderBy('title', 'asc')->limit(5)->get();


        //dd($books);
        return view('books.index', compact('books'));
    }
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }
}
