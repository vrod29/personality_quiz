@extends('master')

@section('title')
    My Spirit Animal
@endsection

@section('content')

<div class="contianer">
  <div class="row justify-content-center">
    <div class="col-6 text-center">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="card-title display-4">What's Your Spirit Animal</h3>
          <p class="card-text">Choose the answers that best describes your personality and we will determine your Spirit Animal</p>
        <div class="form-group">
            <label for="name">Please Type Your Name</label>
            <input class="form-control mb-3" type="text" name="name" value="" required>
            <button class="btn btn-primary btn-lg" type="button" name="button">Start</button>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
