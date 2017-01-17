@extends('appfarmer')

@section('title') Produk Saya @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.my-product')}}">Produk Saya</a></div>
<h1>Review Penanaman</h1>
<hr>

<hr>
<strong>Data Produk</strong>
<hr>
<form method="POST" action="{{route('harvest.next-review-plant',[$harvest->id])}}">
{{csrf_field()}}
<table class="table" style="width:50%;">
	<tr>
		<td>Nama Produk</td>
		<td>{{$harvest->product->name}}</td>
	</tr>
	<tr>
		<td>Mulai Penanaman</td>
		<td>{{date_format(date_create($harvest->plant_date),"d F Y")}}</td>
	</tr>
	<tr>
		<td>Perkiraan Panen</td>
		<td>{{date_format(date_create($harvest->harvest_date_predict),"d F Y")}}</td>
	</tr>
</table>
<hr>
<strong>Data Bahan Pokok</strong>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Bahan Pokok</th>
			<th>Jumlah</th>
			<th></th>
			<th style="text-align: center">Harga Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=0;?>
		@foreach($material as $key)
		<tr>
			<td>{{$key->product->name}}</td>
			<td>{{$key->amount}} {{$key->units}}</td>
			<td style="text-align: right">Rp.</td>
			<td style="text-align: right">{{number_format($key->modal)}}</td>
		</tr>
		<?php $i+=$key->modal;?>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td style="text-align: right">Total Rp.</td><td style="text-align: right">{{number_format($i)}}</td>
		</tr>
		<tr>
			<td><a href="{{route('harvest.cancel-plant',[$harvest->id])}}" class="cancelbtn">Batalkan</a></td>
			<td></td>
			<td></td>
			<td><input type="submit" value="Mulai Tanam"></td>
		</tr>
	</tbody>
</table>
</form>

@endsection

@section('footer')

<script type="text/javascript">
	$(".for_date").datepicker();
	$(".for_date").datepicker("option", "dateFormat", "dd MM yy");
	function hitung(id) {
		if($("#amount_"+id).val()!="" && $("#price_"+id).val()!=""){
			$("#total_"+id).val($("#amount_"+id).val()*$("#price_"+id).val());
		}
	}
</script>

@endsection