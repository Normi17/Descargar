<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesor;



class AsesorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'foto' => 'required|image|max:2048'
        ]);

        $asesor = new Asesor();
        $asesor->nombre = $request->nombre;
        $asesor->apellido = $request->apellido;
        $asesor->telefono = $request->telefono;
        $asesor->email = $request->email;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $ruta = $foto->store('public/imagen');
            $asesor->foto = $ruta;

            // Almacenar la imagen en la ruta deseada en el almacenamiento de Laravel
            $imagen = $request->file('foto');
            $imagen = $imagen->store('public/imagen');
        }

        $asesor->save();

        return redirect()->route('nosotros')->with('success', 'Asesor guardado exitosamente');
    }
}
