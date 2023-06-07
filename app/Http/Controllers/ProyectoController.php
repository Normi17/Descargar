<?php


namespace App\Http\Controllers;

//use App\Models\trabajo;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index(){
        // $trabajos = trabajo::all();
        return view('trabajo.proyecto');
    }

    

}