@extends('appadmin')

@section('title') Ubah Data Produk @endsection

@section('body')
<hr><div class="pull-right"><a class="addnew" href="{{route('product.index')}}">Semua Data Produk</a></div>
<h1>Ubah Data Produk</h1>
<hr>
<form method="POST" action="{{route('product.update',[$id])}}">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="id" value="{{$id}}">
	@include('admin.product._form')
</form>

@endsection