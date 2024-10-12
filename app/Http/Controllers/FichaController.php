<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aluno;

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

        $aluno = new Aluno;
        $aluno->firstName  = $request->firstName;
        $aluno->lastName = $request->lastName;
        $aluno->email = $request->email;
        $aluno->idade = $request->idade;
        $aluno->peso = $request->peso;
        $aluno->altura = $request->altura;
        $aluno->condicoes_medicas = $request->condicoes_medicas;
        $aluno->id_genero = $request->id_genero;
        $aluno->save();


        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $aluno->email;
        $user->password = bcrypt('12345678');
        $user->save();


        return redirect()->route('ficha')->with('success', 'Aluno cadastrado com sucesso!');
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
