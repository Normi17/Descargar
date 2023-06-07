<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\InvierteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AsesorController;

use App\Http\Controllers\ImagenController;
use App\Http\Controllers\VideoController; 
use App\Http\Controllers\BusquedaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// Route::get('/', function () {
//     return view('layouts.plantilla');
// })->name('home');


Route::get('/', [InicioController::class, 'index'])->name('home');
Route::get('/proyecto', [ProyectoController::class, 'index'])->name('proyecto');
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/invierte', [InvierteController::class, 'index'])->name('invierte');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::post('/asesor', [AsesorController::class, 'store'])->name('asesor');

Route::post('/guardar-imagen', [ImagenController::class, 'store'])->name('guardarImagen');
Route::post('/storeVideo', [VideoController::class, 'store'])->name('subir');

Route::get('/buscar', 'BusquedaController@index');



// Route::get('/', [ProyectoController::class,'index'])->name('proyecto');
// Route::get('/', [NosotrosController::class,'index'])->name('invierte');
// Route::get('/', [InvierteController::class,'index'])->name('proyecto');
// Route::get('/', [ContactoController::class,'index'])->name('contacto');
// Route::get('/', [BlogController::class,'index'])->name('blog');


// Route::get('paisajes',[PaisajeController::class,'index'  ]);
//  Route::get('paisajes/create',[PaisajeController::class,'create']); 
// Route::get('paisajes/{paisaje}',[PaisajeController::class,'show']);

// agrupando 




// // --------------------
// Route::controller(PaisajeController::class)->group(function(){
//      Route::get('paisajes','index')->name('paisajes.index');
//      Route::get('paisajes/create','create')->name('paisajes.create');
//      Route::post('paisajes','store')->name('paisajes.store');
//      Route::get('paisajes/{id}','show')->name('paisajes.show');
    
//  });
