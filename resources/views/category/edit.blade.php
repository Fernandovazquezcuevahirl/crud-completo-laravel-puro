<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREAR POST</title>
</head>
<body>

    <h1>
        ACTUALIZAR CATEGORIA {{$category->title}}
    </h1>

       @include('category/fragment/_errors-form')
       <form action="{{ route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">

      
        @method("PUT")
        @include('category/fragment/_form')

    </form>

</body>
</html>