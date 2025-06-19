<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagamentos = pagamento::all();
        return view('pagamentos.index', compact('pagamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pagamento = new Pagamento([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao')
        ]);

        $pagamento->save();

        return redirect()->route('pagamentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pagamento = Pagamento::findOrFail($id);
        return view('pagamentos.show', ['pagamento' => $pagamento]);
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit(string $id)
{
    $pagamento = Pagamento::findOrFail($id);
    return view('pagamentos.edit', compact('pagamento'));
}

public function update(Request $request, string $id)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
    ]);

    $pagamento = Pagamento::findOrFail($id);

    $pagamento->update([
        'nome' => $request->input('nome'),
        'descricao' => $request->input('descricao'),
    ]);

    return redirect()->route('pagamentos.index')
                     ->with('success', 'Forma de pagamento atualizada com sucesso!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    
    {
    $pagamento = Pagamento::findOrFail($id);
    $pagamento->delete();

    return redirect()
        ->route('pagamentos.index')
        ->with('success', 'Forma de pagamento excluída com sucesso!');
    }
}
