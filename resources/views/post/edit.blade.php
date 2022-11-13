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
        ACTUALIZAR POST {{$post->title}}
    </h1>

       @include('post/fragment/_errors-form')
       <form action="{{ route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">

      
        @method("PUT")
        @include('post/fragment/_form')

    </form>

</body>
</html>