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

Route::get('/', function () {
    return view('index');
});

Route::get('/result', function () {
  return view('/result');
});

Route::get('/question/{id}','PersonalController@question');

Route::post('/start_quiz', 'PersonalController@start_quiz');

Route::post('/post_answer', 'PersonalController@question');
