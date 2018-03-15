@extends('master')
@section('title', 'My Spirit Animal')
@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 text-center">
        <div class="card mt-5">
          <div class="card-body">
            <h3 class="card-title display-4">CONGRATULATIONS!</h3>
            <h3 class="card-text">YOU ARE A ......</h3>
            <img class="result_pic mb-2" src="/images/{{$animal}}.jpg"  width="300px" height="350px;"alt="">
            <div class="row">
              <div class="col text-center">
                <a href="/"><button class="btn btn-secondary btn-lg" type="button" value="" name="button">Close</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>














  @endsection
