<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container_fluid">
    <div class="row">
      <div class="col-lg-12">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                <li class="nav-item  text-white">
                  <a class="nav-link active  text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item  text-white">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle  text-white" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu  text-white">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item  text-white">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2  text-white" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>

      </div>
    </div>
  </div>


  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center fst-italic" style="color:red;">Add New Blog</h1>
      </div>
    </div>
  </div>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
      <li>
      {{ $error }}
      </li>
    @endforeach

      </ul>
    </div>
  @endif
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <form class="row g-3" action="{{ route('blog.update',['id'=> $edit-> id] )}}" method="post">
          @csrf
          @method('PATCH')
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Author</label>
            <input type="text" class="form-control  @error('author') is-invalid
            @enderror" id="inputAddress" placeholder="1234 Main St" name="name" value="{{ old('author',$edit->author) }}">
            @error('author')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control  @error('email') is-invalid
            @enderror" id="inputEmail4" name="email" value="{{ old('email',$edit->email) }}">
            @error('email')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label ">Password</label>
            <input type="password" class="form-control  @error('password') is-invalid
            @enderror" id="inputPassword4" name="password" >
            @error('password')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror


          </div>
          <div class="col-md-6">
            <label for="confrimpass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="passconfirm" name="password_confirmation">
          </div>
 
          <div class="col-md-12">
            <label for="exampleFormControlTextarea1" class="form-label ">Content</label>
            <textarea class="form-control  @error('content') is-invalid
            @enderror" id="exampleFormControlTextarea1" rows="3" name="content" value="{{ old('content', $edit->content) }}"></textarea></textarea>
            @error('content')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submmit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>