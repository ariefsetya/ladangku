@extends('appfarmer')

@section('title') Produk Saya @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.my-product')}}">Produk Saya</a></div>
<h1>Data Bahan Pokok</h1>
<hr>
<form method="POST" action="{{route('harvest.next-select-material',[$harvest->id])}}">
{{csrf_field()}}
<table class="table">
	<thead>
		<tr>
			<th>Bahan Pokok</th>
			<th>Jumlah</th>
			<th>Satuan</th>
			<th>Harga per Satuan</th>
			<th>Harga Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=0;?>
		@foreach($material as $key)
		<tr>
			<td><input type="hidden" id="id_material_{{$i}}" name="id_material[]" value="{{$key->id}}">
			<input type="text" readonly name="material[]" value="{{$key->name}}"></td>
			<td><input type="number" oninput="hitung({{$i}})" id="amount_{{$i}}" name="amount[]" value="" placeholder="Contoh : 10"></td>
			<td><input type="text" name="units[]" readonly value="{{$key->units}}" placeholder="Contoh : kg"></td>
			<td><input type="number" oninput="hitung({{$i}})" id="price_{{$i}}" name="price[]" value="" placeholder="Contoh : 10000"></td>
			<td><input type="number" readonly id="total_{{$i}}" name="total[]" value="0"></td>
		</tr>
		<?php $i++;?>
		@endforeach
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><input type="submit" value="Selanjutnya"></td>
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