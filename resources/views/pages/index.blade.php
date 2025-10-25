@extends('layout.master')
@section('title','Index')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($traineess as $item)
    <tr>
      <td scope="row">{{$item['id']}}</td>
      <td scope="row">{{$item['name']}}</td>
      <td scope="row">{{$item['email']}}</td>
      <td scope="row">{{$item['country']}}</td>
      <td><span class="badge bg-{{ $item['is_active'] ? 'success' : 'warning' }}">{{$item['is_active'] ? 'Active':'Inactive'}}</span></td>
      <td scope="row"><x-button bg="dark" href="/trainees/{{$item['id']}}">View</x-button></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection