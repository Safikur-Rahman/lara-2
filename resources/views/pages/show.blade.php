@extends("layout.master")
@section('title','Trainee')
@section('content')
<div>
    <h1>Trainees Details</h1>
    <h3>Trainee Id : {{ $trainee['id'] }} </h3>
    <h4>Trainees Name : {{ $trainee['name'] }}</h4>
    <h4>Trainees Email : {{ $trainee['email'] }}</h4>
    <h4>Trainees Country : {{ $trainee['country'] }}</h4>
</div>
@endsection