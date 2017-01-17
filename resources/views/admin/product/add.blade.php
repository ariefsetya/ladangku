@extends('appadmin')

@section('title') Tambah Data Produk @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('product.index')}}">Semua Data Produk</a></div>
<h1>Tambah Data Produk</h1>
<hr>
<form method="POST" action="{{route('product.store')}}">
	{{csrf_field()}}
	@include('admin.product._form')
</form>

@endsection