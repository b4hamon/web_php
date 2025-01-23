<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return response()->Json($authors);
    }

    public function metonationality(Request $request)
{
    // Validar si la nacionalidad existe
    $request->validate([
        'nationality' => 'required|string'
    ]);

    // Obtener la nacionalidad de la solicitud
    $nationality = $request->input('nationality');

    // Buscar autores con la nacionalidad
    $authors = Author::where('nationality', $nationality)->get();

    // Devolver en formato JSON
    return response()->json([
        'message' => 'Aquí están los autores',
        'authors' => $authors
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return response()->Json($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::find($id);
        return response()->Json($author);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::find($id);
        return response()->Json($author);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = Author::find($id);
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return response()->Json($author);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);
        $author->delete();
        return response()->Json($author);
    }
}
