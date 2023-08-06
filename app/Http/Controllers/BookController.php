<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // list 
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(10);
        $page = "Books";
        return view('books', [
            "page" => $page,
            "books" => $books
        ]);
    }
    // view page of create

    public function create()
    {
        $page = "create book";
        return view('create-book', ['page' => $page]);
    }
    // create
    public function store(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
        ]);
        return redirect()->route('books.index');
    }

    public function show($book)
    {
        $book = Book::findOrFail($book);
        dd($book);
        // return view();// task 
    }

    public function destroy($book)
    {
        $book = Book::find($book);
        $book->delete();
        return redirect()->back();
    }
}
