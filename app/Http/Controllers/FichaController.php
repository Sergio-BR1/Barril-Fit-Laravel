<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.ficha');
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
        $aluno = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' =>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'idade' =>'required|integer|min:14|max:99',
            'peso' =>'required|numeric',
            'altura' =>'required|numeric',
            'condicoes_medicas' =>'required|string|max:255',
            'id_genero' =>'required|in:masculino,feminino,outros,none',
        ]);

        User::create([
            'firstName' => $aluno['firstName'],
            'lastName' => $aluno['lastName'],
            'email' => $aluno['email'],
            'password' => bcrypt('12345678'),
        ]);

        return redirect()->route('/ficha')->with('success', 'Aluno cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
