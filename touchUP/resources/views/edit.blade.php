@extends('layout')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {background-color: LightGrey;}
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

<div class="col-sm-6">
<h1>This is list page</h1>
<form method="get" action="/edit">
@csrf
  <div class="form-group">
    <label>Name</label>
     <input type="hidden" name="id" value="{{$data->id}}">

    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter Name">

  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Enter address">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>

<div class="footer">
    <p>Contact Us</p>
    <p>Career</p>
</div>
@stop
