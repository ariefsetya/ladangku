@extends('appadmin')

@section('title') Tambah Data Bahan Pokok @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('material.index')}}">Semua Data Bahan Pokok</a></div>
<h1>Tambah Data Bahan Pokok</h1>
<hr>
<form method="POST" action="{{route('material.store')}}">
	{{csrf_field()}}
	@include('admin.material._form')
</form>

@endsection