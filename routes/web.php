<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
/* Route::get('/hola/{nombre?}', function ($nombre = "Pepe") {
    return "Hola $nombre conocenos <a href=' " .route("nosotros")." '>nosotros</a>";
});

Route::get('/we-are', function () {
    return "<h1>Nosotros somos...</h1>";
})->name("nosotros");
 */
/* Route::get('home/{nombre?}/{apellido?}', function ($nombre = "Juan", $apellido = "Cruz") {
    $posts = ['Pato1', 'Pato2', 'Pato3', 'Pato4'];
    $posts2 = null ;
    //return view("home")->with('nombre', $nombre)->with('apellido', $apellido);
    return view("home", ['nombre' =>$nombre, 'apellido' => $apellido, 'posts' => $posts,'posts2' => $posts2]);
})->name('home'); */

//Route::get('post', [PostController::class, 'index'] );

Route::resource('dashboard/post', PostController::class);

Route::resource('dashboard/category', [UserController::class]);
