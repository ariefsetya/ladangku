@extends('appadmin')

@section('title') Tambah Data Petani @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('farmer.index')}}">Semua Data Petani</a></div>
<h1>Tambah Data Petani</h1>
<hr>
<form method="POST" action="{{route('farmer.store')}}">
	{{csrf_field()}}
	@include('admin.farmer._form')
</form>

@endsection