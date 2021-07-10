<?php



use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\AlumnoController;
use \App\Http\Controllers\EscuelaController;


Route::get('', function ()
{
    return view('admin.index');
});

Route::resource('alumno', AlumnoController::class);

Route::resource('escuela', EscuelaController::class);




