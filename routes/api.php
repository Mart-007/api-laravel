<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/post', function() {

  //  return Post::all();

//});

Route::get('users', 'users@getAllUsers');
Route::get('users/{id}', 'users@getUsers');
Route::post('users', 'users@createAllUsers');
Route::put('users/{id}', 'users@updateAllUsers');
Route::delete('users/{id}', 'users@deleteAllUsers');
