@extends('layout.master')
@section('title','Role')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($roles as $item)
    <tr>
      <td scope="row">{{$item['id']}}</td>
      <td scope="row">{{$item['name']}}</td>
      <td scope="row"><x-button bg="dark" href="/roles/{{$item['id']}}">View</x-button></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection