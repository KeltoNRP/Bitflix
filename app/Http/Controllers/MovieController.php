<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovie;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::get();

        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(StoreMovie $request)
    {
        Movie::create($request->all());

        return redirect()->route('movies.index');
    }

    public function show($id)
    {
        $movie = Movie::finda($id);

        return view('movies.show', compact('movie'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
