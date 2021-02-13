@extends('layouts.app')

@section('content')
<div class="sm:text-right">
    <form action="{{ route('movies.index') }}" method="get"> 
        <button type="submit" class="ml-6 text-lg leading-7 font-semibold">X</buttom>
    </form>   
</div>                
<div class="mt-8 bg-white dark:bg-white-800 overflow-hidden shadow sm:rounded-lg">    
    <div class="p-6">          
        <H1>Cadastrar novo filme</H1>
        <form action="{{ route('movies.store') }}" method="post">
            @include ('movies._partials.form')     
        </form>                               
    </div>                                  
</div>
@endsection