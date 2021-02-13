@extends('layouts.app')

@section('content')
@if (isset($filters))
<div class="sm:text-right">
    <form action="{{ route('movies.index') }}" method="get"> 
        <button type="submit" class="ml-6 text-lg leading-7 font-semibold">X</buttom>
    </form>   
</div>                  
@endif              
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1 md:grid-cols-2">      
        <div class="p-6">                                  
            @if (session('message'))
                {{session('message')}}
            @endif
            <H1>Catálogo de filmes online</H1>
            <form action="{{ route('movies.search') }}" method="post"> 
                @csrf
                <input type="text" name="search" placeholder="Filtrar">
                <button type="submit" class="ml-6 text-lg leading-7 font-semibold">Filtrar</button>
            </form> 
            @foreach ($movies as $movie)
                <li><a href="{{ route('movies.show', $movie->id) }}"><strong>{{ $movie->title}}</strong></a></li>
            @endforeach                           
        </div>
    </div>
</div>
<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">
                <div class="flex items-center">                                   
                    <form action="{{ route('movies.create') }}" method="get"> 
                        <button type="submit" class="ml-6 text-lg leading-7 font-semibold">Cadastrar novo filme</buttom>
                    </form>  
                </div>
            </div>
        </div>            
    </div>
</div> 
@if (isset($filters))
    {{ $movies->appends($filters)->links() }}
@else
    {{ $movies->links() }}
@endif
@endsection