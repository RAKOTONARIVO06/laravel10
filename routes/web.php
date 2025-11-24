<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


//principe: Route::http('url',callback);
//Route::get(url,callback);
//Route::post(url,callback);
//Route::put(url,callback);
//Route::delete(url,callback);
//Route::patch(url,callback); pour faire aussi la modification des objects
//Route::options(url,callback); pour récupérer des headers spécifiques

Route::get('/', function () {
    return (view('welcome'));
});

Route::get('/home',function (){
    return view('home', ['framework' => 'laravel']);
});


// Route::get('/hello/{var}',function($var){
//     return ('hello '.$var);
// });
// Route::get('/hello/{var?}',function($var="Diary"){
//     return ('hello '.$var);
// });
Route::get('/show',[UserController::class,'create'])->name('creer');


//Permet de generer /users, /users/create, /users/{user}, /users/{user}/edit, /users(post), /users/{user}(delete)
Route::resource('users',UserController::class);

//Redirect
//Route::redirect('/ici','/la');

//Créer une route avec nom afin de l'utiliser apres au lieu de donner l'url complet
// Route::get('/users/profile',function(){
//     return 'profile';
// })->name('profile');
// Route::get('redirect',function(){
//     return redirect()->route('profile');
// });