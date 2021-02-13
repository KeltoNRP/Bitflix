@extends('layouts.app')

@section('content')           
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid">      
        <div class="p-6">                                  
            @if (session('message'))
                <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                    {{session('message')}}
                </div>
            @endif
            <h1 class="text-center text-3x1 uppercase font-black my-4">Catálogo de filmes online</h1>
            <form action="{{ route('movies.search') }}" method="post" class="bg-white"> 
                @csrf
                <div class="max-w-sm my-4 p-1 pr-0 flex items-center" style="float:right">
                    <input type="text" name="search" placeholder="Buscar" class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none">
                    <button type="submit" class="uppercase p-3 rounded bg-blue-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Buscar</button>
                </div>
            </form>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-700 tracking-wider">Título</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-700 tracking-wider">Categoria</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-700 tracking-wider">Atores</th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-700 tracking-wider">Avaliação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5"><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title}}</a></td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5"><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->category}}</a></td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5"><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->actors}}</a></td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b text-black-900 border-gray-500 text-sm leading-5"><a href="{{ route('movies.show', $movie->id) }}">{{ $movie->rating}}</a></td>    
                        </tr>
                    @endforeach      
                </tbody>
            </table>                     
        </div>
    </div>
</div>
<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">
                <div class="flex items-center">                                   
                    <form action="{{ route('movies.create') }}" method="get"> 
                        <button type="submit" class="my-4 uppercase px-8 py-2 rounded bg-green-600 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Cadastrar novo filme</buttom>
                    </form>  
                </div>
            </div>
        </div>            
    </div>
</div> 
<div class="my-4">
    @if (isset($filters))
        {{ $movies->appends($filters)->links() }}
    @else
        {{ $movies->links() }}
    @endif
</div>
@endsection