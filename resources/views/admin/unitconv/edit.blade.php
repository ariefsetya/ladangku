@extends('appadmin')

@section('title') Ubah Data Unit Konversi @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('unitconv.index')}}">Semua Data Unit Konversi</a></div>
<h1>Ubah Data Unit Konversi</h1>
<hr>
<form method="POST" action="{{route('unitconv.update',[$id])}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="id" value="{{$id}}">
	@include('admin.unitconv._form')
</form>

@endsection