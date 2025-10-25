@extends("layout.master")
@section('title','User')
@section('content')
<h1>Name {{ $user }} </h1>
@if ($id)
<h2>Profile ID : {{$id}}</h2>
@endif
{{-- <h1 class="{{  }}">Profile ID: {{ $id ?? 'not found' }} </h1> --}}
@endsection