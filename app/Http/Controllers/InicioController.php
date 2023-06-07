<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;

// class InicioController extends Controller
// {
//     public function index()
//     {
//          $trabajos = Trabajo::all();
//         return view('home', ['trabajos' => $trabajos]);
//     }
// }


class InicioController extends Controller
{
    public function index(){
       // $trabajos = trabajo::all();
        return view('trabajo.home');
    }

    

}
