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
<h1>Create</h1>
<form action="" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" name="txtName" placeholder="Please Enter Username" />
    </div>
    <div class="form-group">
        <label>Price</label>
        <input class="form-control" name="txtPrice" placeholder="Please Enter Password" />
    </div>
    <div class="form-group">
        <label>ckeditor</label>
        <textarea class="form-control ckeditor" rows="3" name="txtIntro"></textarea>
    </div>
    <div class="form-group">
        <label>ckfinder</label>
        <textarea class="form-control" rows="3" id="ckfinder" name="ckfinder"></textarea>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" rows="3" name="txtContent"></textarea>
    </div>
    <div class="form-group">
        <label>Images</label>
        <input type="file" name="fImages">
    </div>
    <div class="form-group">
        <label>Product Keywords</label>
        <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Product Status</label>
        <label class="radio-inline">
            <input name="rdoStatus" value="1" checked="" type="radio">Visible
        </label>
        <label class="radio-inline">
            <input name="rdoStatus" value="2" type="radio">Invisible
        </label>
    </div>
    <button type="submit" class="btn btn-default">Product Add</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>
</body>
</html>
