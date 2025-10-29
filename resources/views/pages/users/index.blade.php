@extends('layout.master')
@section('title','Users')
@section('content')
    <table class="table">
      @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
        
      @endif
      <div class="my-3 text-end">
        <a href="{{ route('users.create') }}" class="btn btn-outline-primary">Add New</a>
      </div>
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
      {{-- <td scope="row">{{$i+1}}</td> --}}
      <td scope="row">{{$sl}}</td>
      <td scope="row">{{$item['user_id']}}</td>
      <td scope="row">{{$item['first_name']}}</td>
      <td scope="row">{{$item['last_name']}}</td>
      <td scope="row">{{$item['email']}}</td>
      <td scope="row">{{$item['role']}}</td>
      {{-- <td scope="row">{{$item['address']}}</td> --}}
      {{-- <td scope="row">{{$item['photo']}}</td> --}}
      <td scope="row">
        {{-- <x-button bg="dark" href="/users.show/{{$item['user_id']}}">View</x-button> --}}
        <a href="{{route ('users.edit',$item['user_id'])}}" class="btn btn-primary">Edit</a>
        {{-- <a href="/users/user/{{$item['user_id']}}" class="btn btn-info">Details</a> --}}
        <a href="{{ route('users.show',$item['user_id']) }}" class="btn btn-info">Details</a>
        <form action="{{ route('users.destroy',$item['user_id']) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>

      </td>
    </tr>
    @php
      $sl++;
    @endphp
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