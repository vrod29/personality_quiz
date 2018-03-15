@extends('master')
@section('title', 'My Spirit Animal')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="card-title display-4 text-center">{{$question->question}}</h3>
            <h5 class="text-center">Choose One Answer</h5>
            <hr>
          <form class="" action="/post_answer" method="post">
            <div class="row pl-5">
              @csrf
              <?php $i = 0; ?>
              @foreach ($answerChoices as $answer)
                @if($i == 0|| $i == 3)
                  <div class="col">
                @endif

                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="picked_answer" id="exampleRadios1" value="{{ $answer->answer_value }}">
                  <label class="form-check-label" for="exampleRadios1">
                    {{$answer->answer}}
                  </label>
                </div>
                @if($i == 2 || $i == (count($answerChoices) - 1))
                  </div>
                @endif
                <?php $i++; ?>
              @endforeach
              <input type="hidden" name="participant_id" value="{{ $participant->id }}" />
              <input type="hidden" name="question_id" value="{{ $question->id }}">
            </div>
            <button class="btn btn-primary btn-lg ml-5" type="submit" name="button">Next</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection
