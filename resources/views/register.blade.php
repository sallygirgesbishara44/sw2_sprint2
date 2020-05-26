@extends('layouts.master')
<head>

<link rel="stylesheet" href="{{asset('register.css')}}">

</head>

@section('content')

<br>
<h1>Create Your Account</h1>
<br>
<hr style="width:1000px">

<div class="container">

    <form action="/register" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="adress">Adress</label>
      </div>
      <div class="col-75">
        <input type="text" id="adress" name="adress" placeholder="Your adress..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mail">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="username">User Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="username" name="username" placeholder="Your username..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Your password..">
        </div>
      </div>

@csrf

    <br>
    <div class="row">
      <input type="submit" value="Register">
    </div>

    </form>

  </div>

@endsection
