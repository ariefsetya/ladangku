@extends('app')

@section('title') All Farmer @endsection

@section('body')

<table class="table">
	<thead>
		<tr>
			<th>NIK</th>
			<th>Name</th>
			<th>Phone</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($farmer as $data)
		<tr>
			<td>{{$data->nik}}</td>
			<td>{{$data->name}}</td>
			<td>{{$data->phone}}</td>
			<td><a href="{!!route('editFarmer',[$data->id])!!}">Edit</a></td>
			<td><a href="{!!route('deleteFarmer',[$data->id])!!}" onclick="return confirm('Are you sure to delete farmer {{$data->name}}?')">Delete</a></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$farmer->render()!!}

@endsection