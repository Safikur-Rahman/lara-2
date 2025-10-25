@extends("layout.master")
@section('title','Role Page')
@section('content')
<div>
    <h1>Role Details</h1>
    <h3>Trainee Id : {{ $role['id'] }} </h3>
    <h4>Trainees Name : {{ $role['name'] }}</h4>
   
</div>
@endsection