@extends('layouts.app')

@section('content')
<div class="sm:text-right">
    <form action="{{ route('movies.index') }}" method="get"> 
        <button type="submit" class="ml-6 text-lg leading-7 font-semibold">X</buttom>
    </form>   
</div>              
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="p-6">          
        <H1>{{ $movie->title }}</H1>                        
        <ul>
            <li><strong>Descrição:</strong> {{ $movie->description }}</li>
            <li><strong>Categoria: </strong>{{ $movie->category }}</li>
            <li><strong>Atores: </strong>{{ $movie->actors }}</li>
            @if ( $movie->rating > 0)
                <li><strong>Avaliação: </strong>{{ $movie->rating }}</li>
            @endif
        </ul>  
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <div class="flex items-center">                                
                            <form action="{{ route('movies.edit', $movie->id) }}" method="get"> 
                                <button type="submit" class="ml-6 text-lg leading-7 font-semibold">Editar</buttom>
                            </form>  
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="post"> 
                                @csrf                                  
                                @method ('DELETE')
                                <!--<input type="hidden" name="_method" value="DELETE">-->
                                <button type="submit" style="margin:5px;" class="ml-6 text-lg leading-7 font-semibold">Remover</buttom>
                            </form>  
                        </div>
                    </div>
                </div>            
            </div>
        </div>                       
    </div>                                  
</div>       
@endsection