@extends('appadmin')

@section('title') Semua Data Pengguna @endsection

@section('body')

<hr>
<h1>Semua Data Pengguna</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Nama</th>
			<th>E-Mail</th>
			<th>Nomor HP</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($user as $data)
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
			<td>{{$data->phone}}</td>
			<td><form method="POST" action="{!!route('user.destroy',[$data->id])!!}">
				<input type="hidden" name="_method" value="DELETE">{{csrf_field()}}<input type="submit" class="delete" onclick="return confirm('Are you sure to delete user {{$data->name}}?')" value="Hapus"></form></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$user->render()!!}

@endsection