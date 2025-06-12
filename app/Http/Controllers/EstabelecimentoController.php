<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estabelecimento;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estabelecimento = estabelecimento::all();
        return view('estabelecimentos.index', compact('estabelecimento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estabelecimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estabelecimento = new Estabelecimento([
            'nome' => $request->input('nome'),
            'cidade' => $request->input('cidade')
        ]);

        $estabelecimento->save();

        return redirect()->route('estabelecimentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);
        return view('estabelecimentos.show', ['estabelecimento' => $estabelecimento]);
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
    $estabelecimento = Estabelecimento::findOrFail($id);
    $estabelecimento->delete();

    return redirect()
        ->route('estabelecimentos.index')
        ->with('success', 'Estabelecimento excluída com sucesso!');
    }
}
