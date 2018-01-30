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
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
Route::get('/test',function(){
    $role = Role::create(['name' => 'writer']);
    $permission = Permission::create(['name' => 'edit articles']);
    $permissions = $user->permissions;
    echo ":)";
});
Route::get('/asig',function(){
    $user = User::create([
    'name' => 'Styde',
    'email' => 'admin@styde.net',
    'password' => bcrypt('secret')
]);
 
// Asignación del rol
$user->assignRole('Administrator');
});

Route::get('/note','NotesController@index');




Route::group(['middleware' => ['permission:destroy_notes']], function () {
    Route::get('notes/{id}/destroy','NotesController@destroy')->name('notes.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/cliente',function(){
    $user = User::create([
    'name' => 'writer',
    'email' => 'writer@styde.net',
    'password' => bcrypt('123.')
]);
 
// Asignación del rol
$user->assignRole('writer');
});