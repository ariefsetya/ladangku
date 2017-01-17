@extends('appadmin')

@section('title') Semua Data Petani @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('farmer.create')}}">Tambah Data Petani</a></div>
<h1>Semua Data Petani</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>NIK</th>
			<th>Nama</th>
			<th>Nomor HP</th>
			<th>Alamat</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($farmer as $data)
		<tr>
			<td>{{$data->nik}}</td>
			<td>{{$data->name}}</td>
			<td>{{$data->phone}}</td>
			<td>{{$data->address}}</td>
			<td><a class="button" href="{!!route('farmer.edit',[$data->id])!!}">Ubah</a></td>
			<td><form method="POST" action="{!!route('farmer.destroy',[$data->id])!!}">
				<input type="hidden" name="_method" value="DELETE">{{csrf_field()}}<input type="submit" class="delete" onclick="return confirm('Are you sure to delete farmer {{$data->name}}?')" value="Hapus"></form></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$farmer->render()!!}

@endsection