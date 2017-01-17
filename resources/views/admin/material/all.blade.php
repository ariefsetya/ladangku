@extends('appadmin')

@section('title') Semua Data Bahan Pokok @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('material.create')}}">Tambah Data Bahan Pokok</a></div>
<h1>Semua Data Bahan Pokok</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Supplier</th>
			<th>Modal</th>
			<th>Satuan</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($material as $data)
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->supplier}}</td>
			<td>Rp. {{number_format($data->modal,0)}}</td>
			<td>{{$data->units}}</td>
			<td><a class="button" href="{!!route('material.edit',[$data->id])!!}">Ubah</a></td>
			<td><form method="POST" action="{!!route('material.destroy',[$data->id])!!}">
				<input type="hidden" name="_method" value="DELETE">{{csrf_field()}}<input type="submit" class="delete" onclick="return confirm('Are you sure to delete material {{$data->name}}?')" value="Hapus"></form></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$material->render()!!}

@endsection