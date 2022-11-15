@csrf

<label for="">Titulo</label>
<input  type="text" name="title" value="{{ old("title",$post->title) }}" placeholder="Ej: Titulo">
<br>
<br>
<label for="">Slug</label>
<input type="text" name="slug" value="{{ old("slug",$post->slug) }}" placeholder="Ej: slug-personalizado" >
<br>
<br>
<label for="">Categoria</label>
<select name="category_id" >
    @foreach ($categories as $p)
        <option {{ old("category_id",$post->category_id) == $p->id ? 'selected': "" }}  value="{{$p->id}}">{{ $p->title}}</option>
    @endforeach
</select>

<br>
<br>

<label for="">Contenido</label>
<textarea name="content"  placeholder="es para lo siguiente">{{ old("content",$post->content) }}</textarea>
<br>
<br>

<label for="">Descripcion</label>
<textarea name="description" placeholder="tiene las siguientes caracteristicas">{{ old("description",$post->description) }}</textarea>
<br>
<br>

<label for="">Publicar</label>
<select name="posted" >
    <option {{ old("posted",$post->posted) == "not" ? 'selected': "" }} value="not">No</option>
    <option {{ old("posted",$post->posted) == "yes" ? 'selected': "" }} value="yes">Si</option>
</select>
<br>
<br>
<label for="">IMAGEN</label>
<input type="file" name="image">
<br>
<button type="submit">Enviar</button>