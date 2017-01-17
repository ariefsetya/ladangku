@extends('appadmin')

@section('title') Tambah Data Admin @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('admin.index')}}">Semua Data Admin</a></div>
<h1>Tambah Data Admin</h1>
<hr>
<form method="POST" action="{{route('admin.store')}}">
	{{csrf_field()}}
	@include('admin.admin._form')
</form>

@endsection