<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() 
    {
        return response()->json(Usuarios::all());
    }

    public function store(Request $request) 
    {
        $validated = $request->validate([
            'nome_usu' => 'required|string|max:20',
            'email' => 'required|email|max:50',
            'senha' => 'required|string|max:12'
        ]);

        $usuario = Usuarios::create($validated);

        return response()->json(['message' => 'Feito com sucesso!', 'usuario' => $usuario], 201);
    }

    public function update(Request $request, $id_usu)
    {
        $validated = $request->validate([
            'nome_usu' => 'required|string|max:20',
            'email' => 'required|email|max:50',
            'senha' => 'required|string|max:12'
        ]);

        $usuario = Usuarios::find($id_usu);

        if (!$usuario) {
            return response()->json(['message' => 'Usuário não encontrado!'], 404);
        }

        $usuario->update($validated);

        return response()->json(['message' => 'Atualizado com sucesso!', 'usuario' => $usuario], 200);
    }

    public function delete (Request $request) 
    {
        $usuario = Usuarios::find($request->id_usu);
        $usuario->delete();

        return response("Usuario apagado com sucesso!", 200);
    }

}
