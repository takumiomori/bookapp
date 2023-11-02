@extends('layouts.bookapp')

@section('title','楽天Books売上ランキング')

@section('content')

<table>
    @foreach($posts as $apiinfo)
    <tr><th>書籍名</th><td>{{$apiinfo->title}}</td></tr>
    <tr><th>出版社</th><td>{{$apiinfo->publisherName}}</td></tr>
    <tr><th>著者</th><td>{{$apiinfo->author}}</td></tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection