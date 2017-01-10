@extends('app')

@section('title') Add Farmer @endsection

@section('body')

<form method="POST" action="{{route('saveFarmer')}}">
	{{csrf_field()}}
	@include('_form')
</form>

@endsection