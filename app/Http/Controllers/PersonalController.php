<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Question;
use App\Answer;


class PersonalController extends Controller
{
  public function start_quiz(Request $request) {
    $newParticipant = new Participant;
    $newParticipant->name = $request->participant_name;
    $newParticipant->save();

    return redirect('question/1');
  }

  public function question($id){
    $question = Question::find($id);
    $answerChoices = Answer::where('question_id', '=', $id)->get();

    $data = [
      'question' => $question,
      'answerChoices' => $answerChoices,
    ];

    return view ('question')->with($data);

  }
}
