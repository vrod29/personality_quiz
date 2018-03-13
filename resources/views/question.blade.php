@extends('master')

@section('title')
    My Spirit Animal
@endsection

@section('content')

<?php dump($answerChoices)?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="card-title display-4 text-center">{{$question->question}}</h3>
        <div class="row pl-5">
          <div class="col">
            @foreach ($answerChoices as $answer)
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                {{$answer->answer}}
              </label>
            </div>
            @endforeach
          </div>
        </div>
          <button class="btn btn-primary btn-lg ml-5" type="button" name="button">Next</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
