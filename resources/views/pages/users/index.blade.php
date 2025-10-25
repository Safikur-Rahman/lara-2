@extends('layout.master')
@section('title','Role')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role Id</th>
      <th scope="col">Address</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $item)
    <tr>
      <td scope="row">{{$item['id']}}</td>
      <td scope="row">{{$item['name']}}</td>
      <td scope="row">{{$item['email']}}</td>
      <td scope="row">{{$item['role_id']}}</td>
      <td scope="row">{{$item['address']}}</td>
      <td scope="row">{{$item['photo']}}</td>
      <td scope="row"><x-button bg="dark" href="/users/{{$item['id']}}">View</x-button></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection