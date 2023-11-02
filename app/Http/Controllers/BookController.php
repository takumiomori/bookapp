<?php
namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

    public function edit(Request $request){
        $book = Book::find($request->id);
        return view('book.edit',['form' => $book]);
    }

    public function update(Request $request){
        $this->validate($request, Book::$rules);
        $book = Book::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/book');
    }

    public function delete(Request $request){
        $book = Book::find($request->id);
        return view('book.del',['form' => $book]);
    }

    public function remove(Request $request){
        Book::find($request->id)->delete();
        return redirect('/book');
    }

    public function find(Request $request){
        return view('book.find',['input'=>'']);
    }

    public function search(Request $request){
        $keyword = $request->input;
        $item = Book::where('title','like', "%$keyword%")->first();
        $param = ['input'=> $request->input, 'item'=>$item];
        return view('book.find',$param);
    }

    public function rakutenapi(){
        $url = "https://app.rakuten.co.jp/services/api/BooksTotal/Search/20170404?applicationId=1045799994551880282&keyword=%E6%9C%AC&hits=10&page=10&sort=sales";

        $method = "GET";

        //接続
        $client = new Client();

        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return view('book.rakutenapi', ['posts' => $posts]);
    }
}
