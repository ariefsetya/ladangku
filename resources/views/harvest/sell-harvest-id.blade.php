@extends('appfarmer')

@section('title') Jual Hasil Panen @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.my-product')}}">Produk Saya</a></div>
<h1>Jual Hasil Panen {{$harvest->product->name}}</h1>
<hr>

<hr>
<strong>Data Produk</strong>
<hr>
<form method="POST" action="{{route('harvest.next-sell-harvest-id',[$harvest->id])}}">
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
		<td>Panen</td>
		<td>{{date_format(date_create($harvest->harvest_date),"d F Y")}}</td>
	</tr>
	<tr>
		<td>Harga per {{$harvest->units}}</td>
		<td>Rp{{number_format($harvest->price_per_units,0,",",".")}}</td>
	</tr>
	<tr>
		<td>Stok {{$harvest->product->name}}</td>
		<td>{{$harvest->harvest_amount-\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$harvest->id)->where('id_product',$harvest->id_product)->first()['sum(amount)']." ".$harvest->units}}</td>
	</tr>
</table>
<table class="table">
	<tr>
		<td>Jumlah Penjualan</td>
		<td><input type="hidden" id="ppu" name="price_per_units" value="{{$harvest->price_per_units}}"><input type="hidden" name="id_product" value="{{$harvest->id_product}}"><input type="hidden" name="units" value="{{$harvest->units}}"><input type="hidden" name="id_harvest" value="{{$harvest->id}}"><input type="hidden" id="stok" name="stok" value="{{$harvest->harvest_amount-\App\ProductSold::selectRaw('sum(amount)')->where('id_harvest',$harvest->id)->where('id_product',$harvest->id_product)->first()['sum(amount)']}}"><input oninput="hitung()" id="amount" type="text" name="amount" style="width: 95%">{{$harvest->units}}</td>
	</tr>
	<tr>
		<td>Harga Total</td>
		<td><input type="text" readonly id="price" name="price"></td>
	</tr>
	<tr>
		<td>Sisa Stok</td>
		<td><input type="text" readonly id="stoksisa" name="stoksisa"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Jual"></td>
	</tr>
</table>
</form>

@endsection

@section('footer')

<script type="text/javascript">
function hitung() {
	if($("#ppu").val()!="" && $("#amount").val()!=""){
		$("#price").val($("#ppu").val()*$('#amount').val());
		if(parseInt($("#stok").val())<parseInt($("#amount").val())){
			alert('Stok tidak mencukupi');
			$("#price").val('0');
			$("#amount").val('0');
		}
		$("#stoksisa").val(parseInt($("#stok").val())-parseInt($("#amount").val())+' {{$harvest->units}}');
	}else{
		$("#stoksisa").val(parseInt($("#stok").val())+' {{$harvest->units}}');
		$("#price").val('0');
		$("#amount").val('');
	}
}
</script>

@endsection