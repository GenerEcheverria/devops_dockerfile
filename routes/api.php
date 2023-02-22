<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use App\Http\Resources\AlumnoResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('alumnos', "\App\Http\Controllers\AlumnoController@index");


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
