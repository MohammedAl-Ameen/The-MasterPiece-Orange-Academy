@extends('layouts.master')

@section('title', 'Login')

@section('content')
<section class="vh-100">
<div class="container-fluid" style="
display: flex;
justify-content: center;
align-items: center;
height: 66vh;
">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div>
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
    </div>
    <div>
        <form method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
            </div>
            </div>
            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>
            <!-- Register buttons -->
            <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
            </div>
        </form>
    </div>
    </div>
</div>
</section>
@endsection
