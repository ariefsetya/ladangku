@extends('app')

@section('title') Edit Farmer @endsection

@section('body')

<form method="POST" action="{{route('updateFarmer')}}">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{$farmer->id}}">
	@include('_form')
</form>

@endsection