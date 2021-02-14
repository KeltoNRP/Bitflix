@extends('layouts.app')

@section('content') 
@can('isAdmin')     
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="p-6">          
        <h1 class="text-center text-3x1 uppercase font-black my-4">Cadastrar novo filme</H1>
        <form action="{{ route('movies.store') }}" method="post">
            @include ('movies._partials.form')     
        </form>                               
    </div>                                  
</div>
@endcan
@endsection