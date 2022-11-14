<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREAR CATEGORIA</title>
</head>
<body>
    <h1>
        CREAR POST
    </h1>

       @include('category/fragment/_errors-form')

    
    <form action="{{ route('category.store')}}" method="post">
       
        @include('category/fragment/_form')

    </form>

</body>
</html>