@extends('layout.layout')
@section('title','Book List')
@section('content')
    <div class="mt-3">
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($param['books'] as $book)
                    <tr class="table-light">
                        <td scope="row"><a class="text-decoration-none text-black" href="{{ url('detail-book/'.$book->id) }}">{{$book->title}}</a></td>
                        <td>{{$book->detail->author}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>  
    </div>
    <div class="d-flex justify-content-end">
        {{$param['books']->withQueryString()->links()}}
    </div>	
@endsection
