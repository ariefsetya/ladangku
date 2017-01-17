@extends('appadmin')

@section('title') Semua Data Admin @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('admin.create')}}">Tambah Data Admin</a></div>
<h1>Semua Data Admin</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Nama</th>
			<th>E-Mail</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($admin as $data)
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
			<td><a class="button" href="{!!route('admin.edit',[$data->id])!!}">Ubah</a></td>
			<td><form method="POST" action="{!!route('admin.destroy',[$data->id])!!}">
				<input type="hidden" name="_method" value="DELETE">{{csrf_field()}}<input type="submit" class="delete" onclick="return confirm('Are you sure to delete admin {{$data->name}}?')" value="Hapus"></form></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$admin->render()!!}

@endsection