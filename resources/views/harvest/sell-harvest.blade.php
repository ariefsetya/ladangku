@extends('appfarmer')

@section('title') Jual Hasil Panen @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.start-plant')}}">Mulai Penanaman</a></div>
<h1>Jual Hasil Panen</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Produk</th>
			<th>Masa Penanaman</th>
			<th>Stok</th>
			<th>Terjual</th>
			<th>Profit</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($harvest as $data)
		<tr>
			<td>{{$data->product->name}}</td>
			<td>{{$data->plant_date." - ".$data->harvest_date}}</td>
			<td>{{$data->harvest_amount-\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(amount)'].' '.$data->units}}</td>
			<td>{{\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(amount)'].' '.$data->units}}</td>
			<td>Rp{{number_format(\App\ProductSold::selectRaw('sum(profit)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(profit)'])}}</td>
			<td>
			@if(($data->harvest_amount-\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(amount)'])>0)
			<a class="button" href="{{route('harvest.sell-harvest-id',[$data->id])}}">Jual</a>
			@else
			Stok Habis
			@endif</td>
		</tr>		
	@endforeach
	</tbody>
</table>



@endsection