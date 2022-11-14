<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('status'))
    {{session('status')}}

@endif
<br>
    <a href="{{route("category.create")}}">CREAR</a>
    <table>
        <thead>
        <tr>
            <th>TITULO</th>
            <th>ACCIONES</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($category as $c)
            <tr>
                <td>{{$c->title}}</td>
                <td>   
                     <a href="{{route("category.edit",$c)}}">editar</a>
                     <a href="{{route("category.show",$c)}}">ver</a>
                     <form action="{{route("category.destroy",$c)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $category->links()}} --}}
    
</body>
</html>