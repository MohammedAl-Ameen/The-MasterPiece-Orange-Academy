@extends('layouts.master')

@section('title', 'Join')

@section('content')
<form method="POST" action={{ route("join.store")}}>
    @csrf

    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>
    {{-- <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div> --}}
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>

      <div class="form-group">
        <label for="location">Location</label>
        <input type="text" class="form-control" name="location" id="location" placeholder="Location">
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control" id="age" name="age" placeholder="Age">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
