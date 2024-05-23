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
}
