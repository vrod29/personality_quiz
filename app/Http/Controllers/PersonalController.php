<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Question;
use App\Answer;
use App\Response;


class PersonalController extends Controller
{
  public function start_quiz(Request $request) {
    $newParticipant = new Participant;
    $newParticipant->name = $request->participant_name;
    $newParticipant->save();

    return redirect('question/1');
  }

  public function question(Request $request){
    $newResponse = new Response;
    $newResponse->question_id = $request->question_id;
    $newResponse->user_id = $request->participant_id;
    $newResponse->answer_id = $request->picked_answer;
    $newResponse->save();

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

  public function calculate($userId){
    $answerResults = Response::where('user_id', '=', $userId)->get();
    // calculate points based on answer $answerChoices
    $answerTotal = 0;

    foreach ($answerResults as $result) {
      $answerTotal += $result->answer->answer_value;
    }

    // based on # of points - determine what animal is shown based on point range

    // display result on results page with images

    // set reset button to index view

  }
}
