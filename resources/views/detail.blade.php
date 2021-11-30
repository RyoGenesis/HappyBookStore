@extends('layout.layout')
@section('title','Book Detail')
@section('content')	
    <div class="my-3">
        <p>Title : {{$param['book']->title}}</p>
        <p>Author : {{$param['book']->detail->author}}</p>
        <p>Publisher : {{$param['book']->detail->publisher}}</p>
        <p>Year : {{$param['book']->detail->year}}</p>
        <p>Description : </p>
        <p>{{$param['book']->detail->description}}</p>
    </div>
@endsection