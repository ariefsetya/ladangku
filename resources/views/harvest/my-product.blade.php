@extends('appfarmer')

@section('title') Produk Saya @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.start-plant')}}">Mulai Penanaman</a></div>
<h1>Produk Saya</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Produk</th>
			<th>Masa Penanaman</th>
			<th>Status</th>
			<th>Hasil</th>
			<th>Harga per Satuan</th>
			<th>Stok</th>
			<th>Terjual</th>
			<th>Profit</th>
		</tr>
	</thead>
	<tbody>
	@foreach($harvest as $data)
		<tr>
			<td>{{$data->product->name}}</td>
			<td>{{$data->plant_date." - ".($data->harvest_date!=null?$data->harvest_date:"saat ini")}}</td>
			<td>{{$data->harvest_status}}</td>
			<td>{{$data->harvest_amount." ".$data->units}}</td>
			<td>Rp. {{number_format($data->price_per_units)."/".$data->units}}</td>
			<td>{{$data->harvest_amount-\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(amount)'].' '.$data->units}}</td>
			<td>{{\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(amount)'].' '.$data->units}}</td>
			<td>Rp{{number_format(\App\ProductSold::selectRaw('sum(profit)')->where('id_harvest',$data->id)->where('id_product',$data->id_product)->first()['sum(profit)'])}}</td>
		</tr>		
	@endforeach
	</tbody>
</table>

{!!$harvest->render()!!}


@endsection