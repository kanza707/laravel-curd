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
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>All users</h1>
        <a href="{{ route('registration.create') }}"><button>add more</button></a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ruser as $data )
             <tr>
              <th scope="row">{{ $data->id }}</th>
              <td>{{ $data->name }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->password  }}</td>
              <td><a href="{{ route('registration.edit',$data->id) }}"><button>edit</button></a></td>
              <form action="{{ route('registration.delete', $data->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <td><button type="submit" onclick="return confirm('Are you sure?')">Delete</button></td>
</form>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>