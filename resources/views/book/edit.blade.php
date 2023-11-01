@extends('layouts.bookapp')

@section('title','Book管理システム 書籍情報更新')

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
<form action="/book/edit" method="post">
<table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr><th>書籍名</th><td><input type="text" name="title" value="{{$form->title}}"></td></tr>
    <tr><th>出版社</th><td><input type="text" name="publisher" value="{{$form->publisher}}"></td></tr>
    <tr><th>著者</th><td><input type="text" name="author" value="{{$form->author}}"></td></tr>
    <tr><th></th><td><input type="submit" value="更新"></td></tr>
</table>
</form>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection