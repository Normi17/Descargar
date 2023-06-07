<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|mimes:jpeg,png,gif|max:2048'
        ]);
    
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ruta = $foto->store('img', 'public');
            // Aquí podrías guardar $ruta en la base de datos si es necesario
        } else {
            // Manejar el caso cuando no hay archivo
            return redirect()->route('nosotros')->withErrors('No se ha proporcionado ninguna imagen');
        }
    
        return redirect()->route('nosotros')->with('success', 'Imagen enviada correctamente');
    }
    
}

