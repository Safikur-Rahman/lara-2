@extends('layout.master')
@section('title','Role')
@section('content')
    <table class="table">
  <thead>
    <tr>
        <h1 class="text-center">Users Details</h1>
        <h3 class="text-center">User Name {{$user['name']}}</h3>
    </tr>
  </thead>
  <tbody>
    <tr>
      <h3 scope="col">Id : {{$user['id']}}</h3>
      <h3 scope="col">Name : {{$user['name']}}</h3>
      <h3 scope="col">Email : {{$user['email']}}</h3>
      <h3 scope="col">Role Id : {{$user['role_id']}}</h3>
      <h3 scope="col">Address : {{$user['address']}}</h3>
      <h3 scope="col">Photo : {{$user['photo']}}</h3>
      
    </tr>
  </tbody>
</table>
@endsection