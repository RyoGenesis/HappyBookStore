<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Book Store</title>
    <link rel="stylesheet" href="/asset/css/bootstrap.css" />
</head>
<body>
    @include('layout.header')
    <div class="container mt-4">
        
        <div class="row px-4 py-2">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="border bg-warning p-1 fs-4">@yield('title')</div>
                @yield('content')
            </div>
          
            <div class="col-2">
                <div class="border bg-warning p-1 fs-4">Category</div>
                <ul class="nav flex-column">
                    @foreach ($param['categories'] as $categ)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('category/'.$categ->id) }}">{{$categ->category}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>
<script src="/asset/js/bootstrap.js"></script>
</html>