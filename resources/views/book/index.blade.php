@extends('layouts.bookapp')

@section('title','Book管理システム')

@section('content')
<table>
    <tr><th>ID</th><th>書籍名</th><th>出版社</th><th>著者</th></tr>
    @foreach($items as $item)
    <tr><td>{{$item->id}}</td><td>{{$item->title}}</td><td>{{$item->publisher}}</td><td>{{$item->author}}</td></tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection

