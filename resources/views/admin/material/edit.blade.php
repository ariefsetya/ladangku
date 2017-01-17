@extends('appadmin')

@section('title') Ubah Data Bahan Pokok @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('material.index')}}">Semua Data Bahan Pokok</a></div>
<h1>Ubah Data Bahan Pokok</h1>
<hr>
<form method="POST" action="{{route('material.update',[$id])}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="id" value="{{$id}}">
	@include('admin.material._form')
</form>

@endsection