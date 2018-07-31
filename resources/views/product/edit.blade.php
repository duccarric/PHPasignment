<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Edit Product</h1>
<div class="container">
    <form action="/product/{{$product->id}}" method="POST">
        @method('PUT')
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="Name" value="{{$product->name}}" />
        </div>
        <div class="form-group">
            <label>Category</label>
            <input class="form-control" name="Category" value="{{$product->category_id}}" />
        </div>
        <div class="form-group">
            <label>Image</label>
            <input class="form-control" name="Image" value="{{$product->image}}" />
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="Price" value="{{$product->price}}" />
        </div>
      <button type="submit" class="btn btn-default">submit</button>

    </form>
</div>

</body>
</html>
