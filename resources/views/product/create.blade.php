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
<h1 class="text-center">Create Product</h1>
<div class="container">
    <form action="/product" method="POST">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="Name" placeholder="Please Enter Username" />
        </div>
        <div class="form-group">
            <label>Category</label>
            <input class="form-control" name="Category" placeholder="Please Enter Username" />
        </div>
        <div class="form-group">
            <label>Price</label>
            <input class="form-control" name="Price" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>Image</label>
            <input class="form-control" name="Image" placeholder="Please Enter Password" />
        </div>
        <button type="submit" class="btn btn-default">Product Add</button>
    </form>
</div>

</body>
</html>
