@extends('layouts.master')
<head> <link rel="stylesheet" href="{{ asset('css/app.css')}}" ></head>
@section('content')
<div class="container">
  <div class="jumbotron text-center ">
    <h1>Welcome to BURGERBAR </h1>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    <a class="btn btn-success btn-lg" href="/register/submit" role="button">Register</a>
  </p>
  </div>
  </div>
@endsection
