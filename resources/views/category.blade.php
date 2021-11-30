@extends('layout.layout')
@section('title',$param['categ']->category)
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
            @forelse ($param['books'] as $book)
                <tr class="table-light">
                    <td scope="row"><a class="text-decoration-none text-black" href="{{ url('detail-book/'.$book->id) }}">{{$book->title}}</a></td>
                    <td>{{$book->detail->author}}</td>
                </tr>
            @empty
                <tr class="table-light">
                    <td colspan="2"><p class="bg-warning">No Data</p></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>	
<div class="d-flex justify-content-end">
    {{$param['books']->withQueryString()->links()}}
</div>	
@endsection
