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


Route::get('/question/{id}','PersonalController@question');

Route::post('/start_quiz', 'PersonalController@start_quiz');

Route::post('/post_answer', 'PersonalController@question');

Route::get('/test', function() {
  $userId = 27;
  $answerResults = App\Response::where('user_id', '=', $userId)->get();
  // calculate points based on answer $answerChoices
  $answerTotal = 0;

  foreach ($answerResults as $result) {
    $answerTotal += $result->answer->answer_value;

  }
  $animal = '';

  if ($answerTotal >1 || $answerTotal < 10) {
      $animal = 'cat';

  } else if ($answerTotal >10 || $answerTotal < 20) {
      $animal = 'dog';
  } else if ($answerTotal >20 || $answerTotal < 30) {
      $animal = 'peacock';
    }
    else if ($answerTotal >30 || $answerTotal < 40) {
      $animal = 'racoon';
    }
    else if ($answerTotal >40 || $answerTotal < 50) {
      $animal = 'bear';
    }
    else if ($answerTotal >50 || $answerTotal < 60) {
      $animal = 'lion';
    }

    Log::debug('ANSWER TOTAL');
    Log::debug($answerTotal);

    return $animal;
});
