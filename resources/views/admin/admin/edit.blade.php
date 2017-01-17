@extends('appadmin')

@section('title') Ubah Data Admin @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('admin.index')}}">Semua Data Admin</a></div>
<h1>Ubah Data Admin</h1>
<hr>
<form method="POST" action="{{route('admin.update',[$id])}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="id" value="{{$id}}">
	@include('admin.admin._form')
</form>

@endsection