<?php


namespace App\Http\Controllers;

use App\Models\trabajo;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
       // $trabajos = trabajo::all();
        return view('trabajo.blog');
    }

    

}