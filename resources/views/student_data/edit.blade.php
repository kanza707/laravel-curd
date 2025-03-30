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
  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Student Detail Form</h1>
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
  </div>
  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-12">
        <form class="row g-3" action="{{ route('student.update',['id' => $edit->id]) }}" method="POST">
          @csrf
          @method('PATCH')
          <div class="col-md-6">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid
            @enderror " id="inputName" name="name" value="{{old('name',$edit->name) }}">
            @error('name')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror

          </div>

          <div class="col-md-6">
            <label for="inputName" class="form-label">Father Name</label>
            <input type="text" class="form-control @error('fname') is-invalid
            @enderror" id="inputName" name="fname" value="{{ old('fname',$edit->fname) }}">
            @error('name')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid
            @enderror" id="inputEmail4" name="email" value="{{ old('email',$edit->email) }}">
            @error('email')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control  @error('password') is-invalid
            @enderror" id="inputPassword4" name="password" value="{{ old('password') }}">
            @error('password')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">cPassword</label>
            <input type="password" class="form-control  @error('password_confirmation') is-invalid
            @enderror" id="inputPassword4" name="password_confirmation" value="{{ old('password_confirmation') }}">
            @error('confirmpass')
            <div class="alert alert-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" class="form-control  @error('city') is-invalid
            @enderror" id="inputCity" name="city" value="{{ old('city',$edit->city) }}">
            @error('city')
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
            <button type="submit" class="btn btn-primary">update</button>
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