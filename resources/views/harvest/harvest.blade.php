@extends('appfarmer')

@section('title') Produk Dalam Penanaman @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.start-plant')}}">Mulai Penanaman</a></div>
<h1>Produk Dalam Penanaman</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Produk</th>
			<th>Masa Penanaman</th>
			<th>Status</th>
			<th>Hasil</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($harvest as $data)
		<tr>
			<td>{{$data->product->name}}</td>
			<td>{{$data->plant_date." - ".$data->harvest_date_predict}}</td>
			<td>{{$data->harvest_status}}</td>
			<td>{{$data->harvest_amount.$data->units}}</td>
			<td><a class="button" href="{{route('harvest.start-harvest',[$data->id])}}">Hasil Tanam</a></td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$harvest->render()!!}


@endsection