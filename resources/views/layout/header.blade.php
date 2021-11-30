<header>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid p-4">
          <span class="navbar-brand mx-auto fs-1 fw-light">HAPPY BOOK STORE</span>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-primary bg-white ">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($param['categories'] as $categ)
                  <li><a class="dropdown-item" href="{{ url('category/'.$categ->id) }}">{{$categ->category}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>