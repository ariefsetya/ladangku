@extends('appadmin')

@section('title') Semua Data Produk @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('product.create')}}">Tambah Data Produk</a></div>
<h1>Semua Data Produk</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Modal</th>
			<th>Satuan</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($product as $data)
		<tr>
			<td>{{$data->name}}</td>
			<td>Rp. {{number_format($data->modal,0)}}</td>
			<td>{{$data->units}}</td>
			<td><a class="button" href="{!!route('product.edit',[$data->id])!!}">Ubah</a></td>
			<td><form method="POST" action="{!!route('product.destroy',[$data->id])!!}">
				<input type="hidden" name="_method" value="DELETE">{{csrf_field()}}<input type="submit" class="delete" onclick="return confirm('Are you sure to delete product {{$data->name}}?')" value="Hapus"></form></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$product->render()!!}

@endsection