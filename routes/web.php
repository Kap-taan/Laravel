<?php

use Illuminate\Support\Facades\Route;

use App\Models\Note;
use App\Models\User;

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

    $countUser = User::all()->count();
    $countNote = Note::all()->count();

    error_log($countNote);

    return view('welcome', ['user' => $countUser, 'topics'=>$countNote]);
});

Route::get('/contact', function () {

    return view('contact');

});

Route::get('/notes', 'App\Http\Controllers\NoteController@index');
Route::get('/notes/create', 'App\Http\Controllers\NoteController@create');
Route::get('/notes/find', 'App\Http\Controllers\NoteController@find');
Route::get('/notes/find/{id}', 'App\Http\Controllers\NoteController@findshow');
Route::post('/notes', 'App\Http\Controllers\NoteController@store');
Route::get('/notes/{id}', 'App\Http\Controllers\NoteController@show');
Route::get('/notes/share/{id}', 'App\Http\Controllers\NoteController@share');
Route::post('/notes/share/{id}', 'App\Http\Controllers\NoteController@share');
Route::post('/notes/edit/{id}', 'App\Http\Controllers\NoteController@edit');
Route::get('/notes/edit/{id}', 'App\Http\Controllers\NoteController@edit');

Route::delete('/notes/{id}', 'App\Http\Controllers\NoteController@destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

