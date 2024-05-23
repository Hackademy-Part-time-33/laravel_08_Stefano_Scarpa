<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }
    
    public function create()
    {
        return view('books.create');
    }
    
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    public function store(BookCreateRequest $request)
    {
        $request->validate();
        // Book::create($request->all());

        Book::create([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
        ]);
        session()->flash('success', 'Libro creato con successo!');
        return redirect()->route('books.index');
    }

}
