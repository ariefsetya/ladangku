@extends('appadmin')

@section('title') Tambah Data Unit Konversi @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('unitconv.index')}}">Semua Data Unit Konversi</a></div>
<h1>Tambah Data Unit Konversi</h1>
<hr>
<form method="POST" action="{{route('unitconv.store')}}">
	{{csrf_field()}}
	@include('admin.unitconv._form')
</form>

@endsection