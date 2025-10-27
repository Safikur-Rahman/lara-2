@extends('layout.master')
@section('title','Role')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Index</th>
      <th scope="col">Id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role Id</th>
      {{-- <th scope="col">Address</th> --}}
      {{-- <th scope="col">Photo</th> --}}
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $i => $item)
    <tr>
      <td scope="row">{{$i+1}}</td>
      <td scope="row">{{$item['user_id']}}</td>
      <td scope="row">{{$item['first_name']}}</td>
      <td scope="row">{{$item['last_name']}}</td>
      <td scope="row">{{$item['email']}}</td>
      <td scope="row">{{$item['role']}}</td>
      {{-- <td scope="row">{{$item['address']}}</td> --}}
      {{-- <td scope="row">{{$item['photo']}}</td> --}}
      <td scope="row"><x-button bg="dark" href="/users/{{$item['user_id']}}">View</x-button></td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th>
        {{ $users->links('vendor.pagination.bootstrap-5') }}
      </th>
    </tr>
  </tfoot>
</table>
@endsection