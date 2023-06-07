<?php


namespace App\Http\Controllers;

use App\Models\Trabajo;
use App\Models\Asesor;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        $trabajos = Asesor::all();
        return view('trabajo.nosotros', compact('trabajos'));
    }
}
