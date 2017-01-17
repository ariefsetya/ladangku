@extends('appadmin')

@section('title') Ubah Data Petani @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('farmer.index')}}">Semua Data Petani</a></div>
<h1>Ubah Data Petani</h1>
<hr>
<form method="POST" action="{{route('farmer.update',[$id])}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="id" value="{{$id}}">
	@include('admin.farmer._form')
</form>

@endsection