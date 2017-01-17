@extends('appfarmer')

@section('title') Produk Saya @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.my-product')}}">Produk Saya</a></div>
<h1>Mulai Penanaman</h1>
<hr>
<strong>Informasi Penanaman</strong>
<hr>
<form method="POST" action="{{route('harvest.submit-harvest',[$harvest->id])}}">
{{csrf_field()}}
<table class="table">
	<tr>
		<td>Produk</td>
		<td>{{$harvest->product->name}}</td>
	</tr>
	<tr>
		<td>Mulai Penanaman</td>
		<td>{{$harvest->plant_date}}</td>
	</tr>
	<tr>
		<td>Perkiraan Panen</td>
		<td>{{$harvest->plant_date_predict}}</td>
	</tr>
</table>
<hr>
<strong>Hasil Tanam</strong>
<hr>
<table class="table">
	<tr>
		<td>Status</td>
		<td><select name="harvest_status">
			<option value="panen">Panen</option>
			<option value="gagal panen">Gagal Panen</option>
		</select></td>
	</tr>
	<tr>
		<td>Tanggal Panen</td>
		<td><input type="text" class="for_date" name="harvest_date"
		placeholder="Contoh : 01 January 2017"></td>
	</tr>
	<tr>
		<td>Jumlah Panen</td>
		<td><input type="text" name="harvest_amount" style="width:95%"
		placeholder="Contoh : 1000">  {{$harvest->product->units}}</td>
	</tr>
	<tr>
		<td>Harga per {{$harvest->product->units}} (Rp)</td>
		<td><input type="text" name="price_per_units" placeholder="Contoh : 10000">
		<input type="hidden" name="units" value="{{$harvest->product->units}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>

@endsection

@section('footer')

<script type="text/javascript">
	$(".for_date").datepicker();
	$(".for_date").datepicker("option", "dateFormat", "dd MM yy");
</script>

@endsection