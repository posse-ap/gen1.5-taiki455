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


Route::get('/', 'HelloController@index');
Route::get('/quiz/{id}', 'HelloController@quizy')->name('display_quiz');
Route::get('/menu', 'HelloController@menu');

Route::middleware(['loginCheck'])->group(function () {
    Route::get('/admin', 'EditController@title')->name('admin_menu');
    Route::post('/admin', 'EditController@create_delete_title');
    Route::get('/admin/{title_id}', 'EditController@question_number')->name('question_list');
    Route::post('/admin/create_question', 'EditController@question_number_create')->name('question_list_update');
    Route::post('/admin/delete_question', 'EditController@question_number_delete')->name('question_list_delete');
    Route::get('/admin/{title_id}/edit', 'EditController@title_editer')->name('title_edit');
    Route::post('/admin/{title_id}/edit', 'EditController@update_title');
    Route::get('/admin/{title_id}/{question_id}/edit', 'EditController@question_editer')->name('question_edit');
    Route::post('/admin/{title_id}/{question_id}/edit', 'EditController@update');
    
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


