@extends('signup-layout')


@section('content')

<div class="col-lg-10 col-md-12 col-sm-12 border border-secondary p-4">
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">First Name</label>
    <div class="col-6">
      <input class="form-control" type="text" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Last Name</label>
    <div class="col-6">
      <input class="form-control" type="text" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="example-email-input" class="col-2 col-form-label">Email</label>
    <div class="col-6">
      <input class="form-control" type="email" value="example@example.com">
    </div>
        <div class="col-3 form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions"  value="option1">
    <label class="form-check-label mr-2" for="inlineRadio1">Public</label>
    <input class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
    <label class="form-check-label" for="inlineRadio1">Private</label>
    </div>
  </div>

  <div class="form-group row">
    <label for="tel-input" class="col-2 col-form-label">Phone#</label>
    <div class="col-6">
      <input class="form-control" type="tel" value="(555)-555-5555">
    </div>
      <div class="col-3 form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label mr-2" for="inlineRadio1">Public</label>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option2">
  <label class="form-check-label" for="inlineRadio1">Private</label>
</div>
  </div>
  <div class="form-group row">
    <label for="password-input" class="col-2 col-form-label">Password</label>
    <div class="col-6">
      <input class="form-control" type="password" value="">
    </div>
  </div>
  <div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label">Username</label>
    <div class="col-6">
      <input class="form-control" type="text" value="">
    </div>
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>


</div>
@endsection
