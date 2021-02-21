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

Route::get('/ecrirelecon/{course_id}', function (int $course_id) {
    
    return view('editlecon')->with('course_id',$course_id);
});

Route::get('/','LevelController@getListe');
Route::post('AjouterLevel','LevelController@Ajouter');

Route::get('niveau/{id}','CourseController@getListe');
Route::post('/AjouterCourse/{level_id}','CourseController@Ajouter');

Route::get('niveau/lecons/{course_id}','LeconController@getListe');
Route::post('/AjouterLecon/{course_id}','LeconController@Ajouter');
Route::get('/lecon/{lecon_id}','LeconController@getOneLecon');