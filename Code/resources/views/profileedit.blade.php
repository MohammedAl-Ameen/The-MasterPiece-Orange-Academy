@extends('layouts.master')

@section('title', 'Edit')

@section('content')

<form method="POST" action="/user/update/{{ $user["id"] }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="firstname">firstname</label>
      <input name="firstname" class="form-control" id="firstname" value="{{ $user["firstname"] }}">
    </div>
    <div class="form-group">
        <label for="lastname">lastname</label>
        <input name="lastname" class="form-control" id="lastname" value="{{ $user["lastname"] }}">
      </div>
      <div class="form-group">
        <label for="phone">phone</label>
        <input name="phone" class="form-control" id="phone" value="{{ $user["phone"] }}">
      </div>
      <div class="form-group">
        <label for="email">email</label>
        <input name="email" class="form-control" id="email" value="{{ $user["email"] }}">
      </div>
      <div class="form-group">
        <label for="city">city</label>
        <input name="city" class="form-control" id="city" value="{{ $user["city"] }}">
      </div>
      <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>

      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image">


      <button type="submit" class="btn btn-primary" style="margin-top: 5%">Edit</button>

  </form>


  @endsection