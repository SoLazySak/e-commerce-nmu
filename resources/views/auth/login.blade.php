@extends('layouts.front')
@section('content')
<div class="container pb-5 pt-5" >
    <div class="row">
        <div class="col-12">
<form>
    <fieldset>
      <legend class="text-center">Login to your account</legend>
      <div class="mb-3">
        <label for="email" class="form-label">Phone Or Email</label>
        <input type="email" id="email" class="form-control" placeholder="enter your Email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" class="form-control" placeholder="enter your password">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </fieldset>
  </form>
</div>
</div>
</div>
@endsection
