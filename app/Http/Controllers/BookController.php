<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
public function bookList(){
    $bookList = Book::where('user_id', auth()-> user()->id)
    ->orderBy('created_at','desc')
    ->limit(25)
    ->get();

    return view('books.books',['bookList'=>$bookList]);
}
public function create(){
    return view('books.create');
}
public function store(Request $request){
    $request->validate([
        'title' => 'string|required',
        'authors_name' => 'string|required',
        'genre' => 'string|required',
        'description' => 'string|required',
        'year_published' => 'string|required',
    ]);

    $book = Book::create([
        'user_id'=> auth()-> user()-> id,
        'title' => $request->title,        
        'authors_name' => $request->authors_name,
        'genre' => $request->genre,
        'description' => $request->description,
        'year_published' => $request->year_published,
    ]);
    return redirect('/books/'. $book->id) ->with('Info', 'New Post Created');       
}
public function show(Book $book){
    return view('books.view', ['book'=>$book]);
}
public function edit(Book $book){
    return view('books.edit', ['book'=>$book]);
}
public function update(Book $book, Request $request){
    $request->validate([
        'title' => 'string|required',
        'authors_name' => 'string|required',
        'genre' => 'string|required',
        'description' => 'string|required',
        'year_published' => 'string|required',
    ]);
    $book->update($request->all());

    return redirect('/books/' . $book->id);
}
public function recentBook(){

    $recentBook = Book::orderBy('created_at','desc')->limit(100)->get();

     return view('books.recent', ['recentBook'=>$recentBook]);
}

public function open(Book $book){

    return view('books.open', ['book'=>$book]);
    
}
public function delete($id){

    $book = Book::findOrFail($id);
    $book->delete();

    return redirect('/books/book');
    
} 
public function list(Book $book){

return view('books.view', ['book'=>$book]);
} 
}
