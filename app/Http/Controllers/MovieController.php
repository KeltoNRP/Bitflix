<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovie;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->paginate(5);

        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        if (!Gate::allows('isAdmin'))
            return redirect()->back();

        return view('movies.create');
    }

    public function store(StoreMovie $request)
    {
        if (!Gate::allows('isAdmin'))
            return redirect()->back();

        Movie::create($request->all());

        return redirect()
                ->route('movies.index')                
                ->with('message', 'Filme criado com sucesso!');
    }

    public function show($id)
    {
        if (!$movie = Movie::find($id)){
            return redirect()->route('movies.index');
        }

        return view('movies.show', compact('movie'));
    }

    public function edit($id)
    {
        if (!Gate::allows('isAdmin'))
            return redirect()->back();

        if (!$movie = Movie::find($id)){
            return redirect()->back();
        }

        return view('movies.edit', compact('movie'));
    }

    public function update(StoreMovie $request, $id)
    {
        if (!Gate::allows('isAdmin'))
            return redirect()->back();
            
        if (!$movie = Movie::find($id)){
            return redirect()->back();
        }

        $movie->update($request->all());

        return redirect()
                ->route('movies.index')
                ->with('message', 'Filme atualizado com sucesso!');
    }

    public function destroy($id)
    {   
        if (!Gate::allows('isAdmin'))
            return redirect()->back();

        if (!$movie = Movie::find($id)){
            return redirect()->route('movies.index');
        }

        $movie->delete();
        
        return redirect()
                ->route('movies.index')
                ->with('message', 'Filme removido com sucesso!');
    }

    public function search(Request $request)
    {     
        $filters = $request->except('_token');

        $movies = Movie::where('title', 'LIKE',"%{$request->search}%")
                            ->orWhere('description', 'LIKE', "%{$request->search}%")
                            ->orWhere('category', 'LIKE', "%{$request->search}%")
                            ->orWhere('actors', 'LIKE', "%{$request->search}%")
                            ->paginate(5);
                            
        $filter = $request->search;

        return view('movies.index', compact('movies', 'filters', 'filter'));
    }
}
