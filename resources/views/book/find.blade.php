@extends('layouts.bookapp')

@section('title','Book管理システム 検索')

@section('content')
@if(count($errors) > 0)
<div>
    <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/book/find" method="post">
@csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索"></td>
</form>
@if(isset($item))
<table>
    <tr><th>書籍名</th><td>{{$item->title}}</td></tr>
    <tr><th>出版社</th><td>{{$item->publisher}}</td></tr>
    <tr><th>著者</th><td>{{$item->author}}</td></tr>
</table>
@endif
@endsection

@section('footer')
copyright 2023 Omori.
@endsection