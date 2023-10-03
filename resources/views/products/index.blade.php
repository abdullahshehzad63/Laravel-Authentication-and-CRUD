@extends('layout.app') 
@section('content')
<!doctype html>
<html lang="en">

<head>
  <title>Add Product</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container text-center p-5">
    <a href="{{route('products.create')}}" class="btn btn-success">Add Product</a>
  </div>

  <div class="container">
    <div class="table-responsive">
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Detail</th>
            <th scope="col">Product Image</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $index => $val)
          <tr class="text-align-center">
            <td scope="row" class="" >{{++$index}}</td>
            <td>{{$val->name}}</td>
            <td>{{$val->detail}}</td>
            <td><img src="img/{{$val->image}}" width="150px" alt="no image found"></td>
            <td>{{$val->created_at}}</td>
            <td>
              <a href="{{route('products.show',$val->id)}}" class="btn btn-info">Show</a>
              <a href="{{route('products.edit',$val->id)}}" class="btn btn-success">Edit</a>
              <form action="{{route('products.destroy',$val->id)}}" method="post" style="display: inline;">
                {{ csrf_field() }}
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this particular Product')" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
    
@endsection
