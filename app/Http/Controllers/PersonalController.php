<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Question;
use App\Answer;
use App\Response;
use Log;


class PersonalController extends Controller
{
  public function start_quiz(Request $request) {
    $newParticipant = new Participant;
    $newParticipant->name = $request->participant_name;
    $newParticipant->save();

    return redirect('question/1');
  }

  public function question(Request $request){

    if (!empty($request->picked_answer)){
      $newResponse = new Response;
      $newResponse->question_id = $request->question_id;
      $newResponse->user_id = $request->participant_id;
      $newResponse->answer_id = $request->picked_answer;
      $newResponse->save();
    }

    if ($request->question_id == 10) {
      // do ending logic
      $animal = self::calculate($request->participant_id);
      $data = [
        'animal' => $animal
      ];
      return view('result')->with($data);

    } else {
      $nextQuestion = $request->question_id+1;

      // if an answer was selected, record that
      $participant = Participant::orderBy('id', 'DESC')->first();
      $question = Question::find($nextQuestion);
      $answerChoices = Answer::where('question_id', '=', $nextQuestion)->get();

      $data = [
        'question' => $question,
        'answerChoices' => $answerChoices,
        'participant' => $participant
      ];

      return view('question')->with($data);

    }

  }

  public function calculate($userId){
    $answerResults = Response::where('user_id', '=', $userId)->get();
    // calculate points based on answer $answerChoices
    $answerTotal = 0;

    foreach ($answerResults as $result) {
      $answerTotal += $result->answer->answer_value;

    }
    $animal = '';

    if ($answerTotal > 1 && $answerTotal < 10) {
        $animal = 'cat';

    } else if ($answerTotal >10 && $answerTotal < 20) {
        $animal = 'dog';
    } else if ($answerTotal >20 && $answerTotal < 30) {
        $animal = 'peacock';
      }
      else if ($answerTotal >30 && $answerTotal < 40) {
        $animal = 'racoon';
      }
      else if ($answerTotal >40 && $answerTotal < 50) {
        $animal = 'bear';
      }
      else if ($answerTotal >50 && $answerTotal < 60) {
        $animal = 'lion';
      }

      Log::debug('ANSWER TOTAL');
      Log::debug($answerTotal);

      return $animal;
    }
  }
