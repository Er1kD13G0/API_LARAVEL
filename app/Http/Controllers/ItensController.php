<?php

namespace App\Http\Controllers;

use App\Models\Itens;
use Illuminate\Http\Request;

class ItensController extends Controller
{
    public function index() 
    {
        return response()->json(Itens::all());
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'dados' => 'required|string|max:10000'
        ]);

        $iten = Itens::create($validated);

        return response()->json(['message' => 'Feito com sucesso!', 'iten' => $iten], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dados' => 'required|string|max:10000'
        ]);

        $iten = Itens::find($id);

        if (!$iten) {
            return response()->json(['message' => 'Item não encontrado!'], 404);
        }

        $iten->update($validated);

        return response()->json(['message' => 'Atualizado com sucesso!', 'iten' => $iten], 200);
    }

    public function delete (Request $request) 
    {
        $iten = Itens::find($request->id);
        $iten->delete();

        return response("Item apagado com sucesso!", 200);
    }

}
