@extends('layout.master')
@section('title','About')
@section('content')
<x-button>
    click me
</x-button>
<x-button bg="primary" :disable="true" type="submit">
    click me
</x-button>
<h1>About Page</h1>
@endsection