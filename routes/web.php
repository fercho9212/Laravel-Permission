<?php

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
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
Route::get('/', function () {
    return view('welcome');
});

 
// Asignación del rol


Route::get('/note','NotesController@index');




Route::group(['middleware' => ['permission:destroy_notes']], function () {
    Route::get('notes/{id}/destroy','NotesController@destroy')->name('notes.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store');


 


Route::resource('roles', 'User\RoleController');
Route::resource('permissions', 'User\PermissionController');
Route::resource('post', 'Dashboard\PostController');