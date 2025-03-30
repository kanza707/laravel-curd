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
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>BLOGS</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5  ">
        <div class="row">
            <div class="col-lg-12">
                @foreach ( $blogs as $post )
                
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$post->email}}</h6>
                        <p class="card-text"> </p>{{$post->content}}
                        <br>
                        <br>
                        <a href="{{ route('blog.edit',['id'=> $post-> id])  }}" class="card-link">EDIT</a>
                        <form action="{{ route('blog.delete',['id'=> $post-> id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>

<div class="container mt-5 text-center">
<div class="row">
        <div class="col-lg-12">
       <a href="{{ route('blog.create') }}"><button class="btn btn-primary">ADD more</button></a>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>