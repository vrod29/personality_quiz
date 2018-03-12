@extends('master')

@section('title')
    My Spirit Animal
@endsection

@section('content')

<div class="contianer-fluid">
  <div class="row">
    <div class="col">
      <div class="card-body">
        <h3 class="card-title display-4 text-center">What's Your Spirit Animal</h3>
        <p class="card-text text-center">Choose the answers that best describes your personality and we will determine your Spirit Animal</p>
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" value="name" required>
          <button class="btn btn-primary btn-lg" type="button" name="button">Start</button>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
