@extends('layouts.front')
@section('content')
<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-12">
<form>
    <fieldset>
      <legend class="text-center">Register</legend>
      <div class="mb-3">
        <label for="username" class="form-label">Fullname</label>
        <input type="text" id="username" class="form-control" placeholder="enter your fullname">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="enter your Email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" class="form-control" placeholder="enter your password">
      </div>
      <div class="mb-3">
        <label for="comfirmpassword" class="form-label">Comfirmpassword</label>
        <input type="password" id="comfirmpassword" class="form-control" placeholder="comfirmpassword">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
</div>
</div>
</div>
@endsection
