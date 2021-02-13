@extends('layouts.app')

@section('content')               
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="p-6">          
        <h1><strong>Editar o filme: </strong>{{ $movie->title}}</h1>                        
        <form action="{{ route('movies.update', $movie->id) }}" method="post">
            @method ('PUT')
            @include ('movies._partials.form')                            
        </form>                               
    </div>                                  
</div>
@endsection