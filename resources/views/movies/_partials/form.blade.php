@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<strong>Título: </strong><input type="text" name="title" id="title" placeholder="Título" value="{{ $movie->title ?? old('title') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<strong>Descrição: </strong><p><textarea name="description" id="description" cols="100" rows="4" placeholder="Descrição" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $movie->description ?? old('description') }}</textarea>
<strong>Categoria: </strong><input type="text" name="category" id="category" placeholder="Categoria" value="{{ $movie->category ?? old('category') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<strong>Atores: </strong><input type="text" name="actors" id="actors" placeholder="Atores" value="{{ $movie->actors ?? old('actors') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<button type="submit" class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Enviar</button>