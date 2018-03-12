@extends('master')

@section('title')
    My Spirit Animal
@endsection

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 text-center">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="card-title display-4">What's Your Spirit Animal</h3>
          <p class="card-text">CHOOSE THE BEST ANSWERS THAT BEST DESCRIBES YOUR PERSONALITY AND WE WILL DETERMINE WHAT SPIRIT ANIMAL YOU ARE</p>
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
