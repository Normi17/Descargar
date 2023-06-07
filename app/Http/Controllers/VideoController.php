<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:50000' // Ajusta las restricciones según tus necesidades
        ]);

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $ruta = $video->store('videos', 'public'); // Cambié 'img' a 'videos' para guardar los videos en una carpeta separada
            // Aquí podrías guardar $ruta en la base de datos si es necesario
        } else {
            // Manejar el caso cuando no hay archivo
            return redirect()->back()->withErrors('No se ha proporcionado ningún video');
        }

        return redirect()->back()->with('success', 'Video enviado correctamente');
    }
}
