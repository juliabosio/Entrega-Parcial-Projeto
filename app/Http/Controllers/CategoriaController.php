<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'nullable|string',
            'total' => 'required|integer',
        ]);

        Categoria::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'total' => $request->input('total'),
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoria criada com sucesso!');
    }

    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required|string',
            'total' => 'required|integer',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->update([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'total' => $request->input('total'),
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
