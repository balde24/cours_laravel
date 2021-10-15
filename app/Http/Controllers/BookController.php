<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;



class BookController extends Controller
{
    public function library() 
    {
        $books = Book::all();
        return view('library', compact('books'));
       
    }

    public function create() 
    {
       return view('create');
       
    }
    public function store(Request $request)
    {
       

        $books= new Book;

        $books->title = $request->title;
        $books->author = $request->author;
        $books->publication_year= $request->publication_year;
        $books->genre = $request->genre;
        $books->synopsis = $request->synopsis;

        $books->save();
        return redirect('/library');
    }


}
