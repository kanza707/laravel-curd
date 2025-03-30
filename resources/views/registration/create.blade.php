<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Registration form</h1>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12">
        @if (session('success'))
      <!-- <p>{{ session('success') }}</p> -->

    @endif


        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
        </ul>
      </div>
    @endif
        <form method="POST" action="{{ route('registration.store') }}">
          @csrf
          <div class="row mb-3">
            <label for="inputname" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control @error('name') is-invalid
        @enderror" id="inputname" name="name" value="{{ old('name') }}">
              @error('name')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
        @enderror

            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid
          @enderror" id="inputEmail3" name="email" value="{{ old('email') }}">
                @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror

              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control @error('password') is-invalid
          @enderror" id="password" name="password">
                @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">confirm password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control @error('password_confirmation') is-invalid
          @enderror" id="" name="password_confirmation">
                @error('password_confirmation')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
              </div>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>