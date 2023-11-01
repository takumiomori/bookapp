@extends('layouts.bookapp')

@section('title','Book管理システム 書籍新規登録')

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
<form action="/book/add" method="post">
<table>
    @csrf
    <tr><th>書籍名</th><td><input type="text" name="title" value="{{old('title')}}"></td></tr>
    <tr><th>出版社</th><td><input type="text" name="publisher" value="{{old('publisher')}}"></td></tr>
    <tr><th>著者</th><td><input type="text" name="author" value="{{old('author')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="登録"></td></tr>
</table>
</form>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection
