@extends('layouts.master')

@section('title', 'Login')

@section('content')
<form class="row g-3 needs-validation" action="{{ route('login-user') }}" method="POST">
    @csrf
    @if(Session::has('fail'))
        <div class="alert alert-danger" style="text-transform:lowercase;">{{ session::get('fail') }}</div>
    @endif
    <div class="col-md-10">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
    </div>
 
    <div class="col-md-10">
        <label for="validationCustom03" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required>
        <span class="text-danger"> @error('password') {{ $message }} @enderror </span>
    </div>

    <div class="col-10">
        <button class="btn btn-primary" type="submit">Login</button>
      </div>
</form>
@endsection