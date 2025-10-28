@extends('layout.master')
@section('title','Role')
@section('content')
  <div class="container">
   <h2>Create Users</h2> 
   <form action="{{ route('users.store') }}" method="POST">
    @csrf
      <div class="row g-3">
        <div class="col-md-6">
          <label for="">Fast Name</label>
          <input type="text" name="first_name" class="form-control" value={{ old('first_name') }}>
          @error('first_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="">Last Name</label>
          <input type="text" name="last_name" class="form-control" value={{ old('last_name') }}>
          @error('last_name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control">
           @error('email')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="">Role</label>
          <select name="role_id" id="" class="form-select">
            @foreach ($roles as $item)
            <option value="{{ $item['id'] }}">{{$item['name']}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control">
           @error('password')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control">
        </div>
        {{-- /For Showing Error --}}

        {{-- <div class="col-12">
            <ul class="text-danger">
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
        </div> --}}
        <button type="submit">Submit</button>
      </div>
   </form>
  </div>  
@endsection