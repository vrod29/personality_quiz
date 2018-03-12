@extends('master')

@section('title')
    My Spirit Animal
@endsection

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-">
      <div class="card mt-5">
        <div class="card-body">
          <h3 class="card-title display-4 text-center">How do you describe yourself?</h3>
        <div class="row pl-5">
          <div class="col">
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Shy but Curious
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Playful and Loyal
              </label>
            </div>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Short Tempered
              </label>
            </div>
          </div>
          <div class="col">
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="exampleRadios"id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Flashy
              </label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="exampleRadios"id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Helps others in need
              </label>
            </div>
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
