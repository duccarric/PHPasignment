<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>


</head>
<body>
<div class="container">
    {{csrf_field()}}

    <table class="table table-striped table-bordered table-hover" >
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category </th>
            <th>image</th>
            <th>price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr class="odd gradeX" align="center">
                <th>{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->category_id}}</td>
                <td><image href="{{$product->image}}"></image></td>
                <td>{{$product->price}}</td>

                <td class="center"><a href="/product/{{$product -> id}}/edit" >Edit</a>></td>
                <td class="center"><button type="button" class="btn btn-info btn-sm" id="btn-delete" href="{{$product->id}}">Delete</button></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $('#btn-delete').click(function () {
        var productId = $(this).attr('href');
        alert(productId);
        var user_confirm = confirm('Are you sure');
        if(user_confirm){
            $.ajax({
                url: '/product/' + productId,
                    method: 'DELETE',
                data: {
                    '_token': "{{ csrf_token() }}"
                },

                success:function (response) {
                    alert('Xoa thanh cong')
                    window.location.reload();
                },
                error:function () {
                    alert('error');
                }

            });
    }
    });
</script>


</body>
</html>