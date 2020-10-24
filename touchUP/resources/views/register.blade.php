@extends('layout')

@section('content')
body {background-color: LightGrey;}
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}
</style>
<div>
<h1>User Registration Page</h1>
<div class="col-sm-8">
<form method="post" action="register">
@csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="Enter Email address">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="enter Password">

    </div>

    <div class="form-group">
        <label>Contact</label>
        <input type="text" name="contact" class="form-control" placeholder="enter Contact">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

<div class="footer">
    <p>Contact Us</p>
    <p>Career</p>
</div>
@stop
