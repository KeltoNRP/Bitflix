@extends('layouts.app')

@section('content')          
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="w-11/12 p-8 bg-white">
        <h1 class="text-center text-3x1 uppercase font-black my-4"><strong>{{ $movie->title }}</strong></h1>                             
        <ul>
            <li><strong>Descrição:</strong> {{ $movie->description }}</li>
            <li><strong>Categoria: </strong>{{ $movie->category }}</li>
            <li><strong>Atores: </strong>{{ $movie->actors }}</li>
            @if ( $movie->rating > 0)
                <li><strong>Avaliação: </strong>{{ $movie->rating }}</li>
            @endif
        </ul> 
    </div>
</div> 
@can('isAdmin')
<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">
                <div class="flex items-center">                                 
                    <form action="{{ route('movies.edit', $movie->id) }}" method="get"> 
                        <button type="submit" class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Editar</buttom>
                    </form>  
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post"> 
                        @csrf                                  
                        @method ('DELETE')
                        <!--<input type="hidden" name="_method" value="DELETE">-->
                        <button type="submit" style="margin:5px;" class="my-4 uppercase px-8 py-2 rounded bg-red-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Remover</buttom>
                    </form>  
                </div>
            </div>
        </div>            
    </div>
</div>    
@endcan   
@endsection