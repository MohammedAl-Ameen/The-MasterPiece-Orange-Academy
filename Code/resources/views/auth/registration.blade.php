@extends('layouts.master')

@section('title', 'Signup')

@section('content')
<form class="row g-3 needs-validation" action="{{ route('register-user') }}" method="POST">
    @csrf
     @if(Session::has('success'))
     <div class="alert alert-success">{{ session::get('success') }}</div>
     @endif
     @if(Session::has('fail'))
     <div class="alert alert-danger">{{ session::get('fail') }}</div>
     @endif
    <div class="col-md-4">
      <label for="validationCustom01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationCustom01" name="firstname"  value="{{ old('firstName') }}">
      <span class="text-danger"> @error('firstName') {{ $message }} @enderror </span>
    </div>
    <div class="col-md-4">
      <label for="validationCustom02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" name="lastname"  value="{{ old('lastName') }}">
      <span class="text-danger"> @error('lastName') {{ $message }} @enderror </span>
    </div>
    <div class="col-md-6">
      <label for="validationCustomUsername" class="form-label">Email</label>
      <div class="input-group has-validation">
        <input type="email" class="form-control" id="validationCustomemail" name="email"  value="{{ old('email') }}">
        <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
      </div>
    </div>

    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationCustom03" name="city"  value="{{ old('city') }}">
      <span class="text-danger"> @error('city') {{ $message }} @enderror </span>
    </div>

    <div class="col-md-6">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone"  value="{{ old('phone') }}">
      <span class="text-danger"> @error('phone') {{ $message }} @enderror </span>
    </div>

    <div class="col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="Password" >
        <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Join</button>
      </div>
</form>
@endsection