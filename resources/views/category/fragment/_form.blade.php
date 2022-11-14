@csrf

<label for="">Titulo</label>
<input  type="text" name="title" value="{{ old("title",$category->title) }}" placeholder="Ej: Titulo">
<br>
<br>

<button type="submit">Enviar</button>