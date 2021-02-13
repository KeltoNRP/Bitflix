@extends('layouts.app')

@section('content')      
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="p-6">          
        <H1><strong>Cadastrar novo filme</strong></H1>
        <form action="{{ route('movies.store') }}" method="post">
            @include ('movies._partials.form')     
        </form>                               
    </div>                                  
</div>
@endsection