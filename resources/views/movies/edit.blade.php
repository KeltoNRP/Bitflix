@extends('layouts.app')

@section('content')               
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="p-6">          
        <h1 class="text-center text-3x1 uppercase font-black my-4">Editar o filme</h1>                        
        <form action="{{ route('movies.update', $movie->id) }}" method="post">
            @method ('PUT')
            @include ('movies._partials.form')                            
        </form>                               
    </div>                                  
</div>
@endsection