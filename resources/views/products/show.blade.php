@extends('layout.app') 
@section('content')
<!doctype html>
<html lang="en">

<head>
  <title>Show Product</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container text-center p-5">
    <a href="{{route('products.index')}}" class="btn btn-success" >Show All Product</a>
  </div>

    <div class="container">
        <form action="" method="post">
            {{csrf_field()}}
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input value="{{$product->name}}"  type="text" class="form-control" name="name" id="">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Details</label>
              <textarea class="form-control" name="detail" id="" rows="3">{{$product->detail}}</textarea>
            </div>
            <img src="img/{{$product->image}}" width="150px" alt="no image found">
            <div class="mb-3">
              <label for="" class="form-label">Image</label>
              <input type="file" class="form-control" name="image" id="">
            </div>
            <button type="submit" class="btn btn-warning">Save</button>
        </form>
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