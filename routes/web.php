<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/sms_page','SmsController@indexSms');
Route::post('/sms', 'SmsController@sendSms');

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/hello', function () {
    return 'Hello World!';
});
*/

Route::get('/about', function(){
    return  view('pages.about');
});



Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts', 'PagesController');

Route::get('/Home1','PagesController@Home1');
Route::get('/test/{date}','PagesController@test');


Route::get('/users/{id}', function($id){
    return  'This is user '.$id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('posts','PostController');


Route::get('tasks','TasksController@index')->name('tasks.index');
Route::get('tasks/create','TasksController@create')->name('tasks.create');
Route::post('tasks/store','TasksController@store')->name('tasks.store');

Route::get('tasks/{id}/edit','TasksController@edit')->name('tasks.edit');
Route::put('task/{id}/update','TasksController@update')->name('tasks.update');
Route::get('tasks/{id}/show','TasksController@show')->name('tasks.show');

Route::delete('tasks/{id}/destroy','TasksController@destroy')->name('tasks.destroy');

Route::group(['middleware' => ['web' , 'auth']], function(){
    Route::get('/Meirzhan', function(){
        return view('welcome');
    });
    Route::get('/home', function(){
        if (Auth::user()->admin == 0) {
            return view ('home');
        } else {
            $users['users'] = \App\User::all();
            return view('adminhome', $users);
        }
    });
});

