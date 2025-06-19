<?php

namespace App\Http\Controllers;

use App\Models\Carteira;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarteiraController extends Controller
{
    public function index()
    {
        $carteiras = Carteira::where('user_id', Auth::id())->get();
        return view('carteiras.index', compact('carteiras'));
    }

    public function create()
    {
        return view('carteiras.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'saldo' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['user_id'] = Auth::id();

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('uploads', 'public');
        }

        Carteira::create($data);

        return redirect()->route('carteiras.index')->with('success', 'Carteira criada com sucesso!');
    }

    public function show($id)
    {
        $carteira = Carteira::where('user_id', Auth::id())->findOrFail($id);
        return view('carteiras.show', compact('carteira'));
    }

    public function edit($id)
    {
        $carteira = Carteira::where('user_id', Auth::id())->findOrFail($id);
        return view('carteiras.edit', compact('carteira'));
    }

    public function update(Request $request, $id)
    {
        $carteira = Carteira::where('user_id', Auth::id())->findOrFail($id);

        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'saldo' => 'required|numeric',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('imagem')) {
            if ($carteira->imagem) {
                \Storage::disk('public')->delete($carteira->imagem);
            }
            $data['imagem'] = $request->file('imagem')->store('uploads', 'public');
        }

        $carteira->update($data);

        return redirect()->route('carteiras.show', $carteira)->with('success', 'Carteira atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $carteira = Carteira::where('user_id', Auth::id())->findOrFail($id);
        if ($carteira->imagem) {
            \Storage::disk('public')->delete($carteira->imagem);
        }
        $carteira->delete();

        return redirect()->route('carteiras.index')->with('success', 'Carteira excluída com sucesso!');
    }
}
