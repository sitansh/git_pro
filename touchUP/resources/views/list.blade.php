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
<div>
<h1>Restaurant list</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times</span>
</button>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>
      <a href="delete/{{$item->id}}"><i class="fa fa-trash fa-lg"></i></a>
      <a href="edit/{{$item->id}}"><i class="fa fa-edit fa-lg"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>

<div class="footer">
    <p>Contact Us</p>
    <p>Career</p>
</div>
@stop
