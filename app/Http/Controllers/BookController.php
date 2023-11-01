<?php
namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request){
        $items = Book::all();
        return view('book.index',['items' => $items]);
    }

    public function add(Request $request){
        return view('book.add');
    }

    public function create(Request $request){
        $this->validate($request, Book::$rules);
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/book');
    }
}
