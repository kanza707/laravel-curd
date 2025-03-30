<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
     
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Students Data</h1>

            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{ route('student.create') }}"><button class="btn btn-secondary">Add More</button></a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">fname</th>
      <th scope="col">city</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($studentdata as  $student)
    <tr>
       
       <td>{{ $student->id }}</td>
       <td>{{ $student->name }}</td>
       <td>{{ $student->email }}</td>
       <td>{{ $student->fname }}</td>
       <td>{{ $student->city }}</td>
       <td><a href="{{ route('student.edit',['id' => $student->id]) }}"><button class="btn btn-warning">edit</button></a></td>
       
       <td>
       <form action="{{ route('student.delete',['id'=> $student->id])  }}" method="POST">
        @csrf
        @method('DELETE')
        <button onclick="return confirm('are u sure?')" class="btn btn-danger" type="submit" >delete</button> </td>
       </form>
  
     </tr>
    
    @endforeach
   
 
  </tbody>
</table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>