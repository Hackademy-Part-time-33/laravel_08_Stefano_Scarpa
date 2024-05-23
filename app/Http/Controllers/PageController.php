<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        $books = Book::all();

        return view('homepage', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'years' => 'nullable|integer',
            'pages' => 'integer|nullable',
        ]);
        // Book::create($request->all());

        Book::create([
            'name' => $request->name,
            'years' => $request->years,
            'pages' => $request->pages,
        ]);

        return redirect()->route('homepage');
    }
}
