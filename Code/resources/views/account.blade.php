@extends('layouts.master')

@section('title', 'Account')

@section('content')

<div class="col-md-9 col-sm-7">
    <h1>My Account Page</h1>
    <div class="content-page">
      <h3>My Account</h3>
      <ul>
        <li><a href="/user/profile/{{(session()->get("loginId")) }}">View Profile</a></li>
        <li><a href="/product">Your Products</a></li>
      </ul>
      <hr>

      <h3>Orders</h3>
      <ul>
        <li><a href="/sendedappeal">View your order history</a></li>
        <li><a href="/appeal">Requests for your products</a></li>
      </ul>
    </div>
  </div>


@endsection