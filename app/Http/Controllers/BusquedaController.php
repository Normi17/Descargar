<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function index(Request $request)
    {
        $query = strtolower($request->input('q'));
        dd($query);  // Esto detendrá la ejecución y volcará el contenido de $query


        $keywordMap = [
            'proyectos' => '/proyectos',
            'terrenos' => '/proyectos',
            'asesores' => '/nosotros#equiporaiz',
            'asesor' => '/nosotros#equiporaiz',
            'oficina' => '/contacto#mapa',
        ];
        

        if (array_key_exists($query, $keywordMap)) {
            return redirect($keywordMap[$query]);
        } else {
            // Redirige a una página de búsqueda no encontrada o algo similar
            return redirect('/no-encontrado');
        }

        
    }
}
