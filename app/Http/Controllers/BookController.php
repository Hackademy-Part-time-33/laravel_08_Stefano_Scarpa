<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(8);
        return view('books.index', compact('books'));
    }
    
    public function create()
    {
        return view('books.create');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    public function store(BookCreateRequest $request)
    {
        
        $path_image = '';
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }

        Book::create([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
            'image' => $path_image
        ]);
        session()->flash('success', 'Libro creato con successo!');
        return redirect()->route('books.index');
    }

    public function update(BookCreateRequest $request, Book $book)
    {
        
        $path_image = $book->image;
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }

        $book->update([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
            'image' => $path_image
        ]);
        session()->flash('success', 'Libro salvato con successo!');
        return redirect()->route('books.index');
    }

    public function destroy(Book $book){
        $book->delete();
        session()->flash('success', 'Libro cancellato con successo');
        return redirect()->route('books.index');
    }

}
