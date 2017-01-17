@extends('appadmin')

@section('title') Semua Data Unit Konversi @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('unitconv.create')}}">Tambah Data Unit Konversi</a></div>
<h1>Semua Data Unit Konversi</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Konversi</th>
			<th>Perbandingan</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($unitconv as $data)
		<tr>
			<td>{{$data->from_unit." > ".$data->to_unit}}</td>
			<td>{{$data->from_amount.":".$data->to_amount}}</td>
			<td><a class="button" href="{!!route('unitconv.edit',[$data->id])!!}">Ubah</a></td>
			<td><form method="POST" action="{!!route('unitconv.destroy',[$data->id])!!}">
				<input type="hidden" name="_method" value="DELETE">{{csrf_field()}}<input type="submit" class="delete" onclick="return confirm('Are you sure to delete unitconv {{$data->name}}?')" value="Hapus"></form></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$unitconv->render()!!}

@endsection