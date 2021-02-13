@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<strong>Título: </strong><input type="text" name="title" id="title" placeholder="Título" value="{{ $movie->title ?? old('title') }}">
<strong>Categoria: </strong><input type="text" name="category" id="category" placeholder="Categoria" value="{{ $movie->category ?? old('category') }}">
<strong>Atores: </strong><input type="text" name="actors" id="actors" placeholder="Atores" value="{{ $movie->actors ?? old('actors') }}">
<p>                            
<strong>Descrição: </strong><p><textarea name="description" id="description" cols="100" rows="4" placeholder="Descrição">{{ $movie->description ?? old('description') }}</textarea>

<button type="submit" class="ml-6 text-lg leading-7 font-semibold">Enviar</button>