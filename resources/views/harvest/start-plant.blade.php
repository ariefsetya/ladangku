@extends('appfarmer')

@section('title') Produk Saya @endsection

@section('body')

<hr><div class="pull-right"><a class="addnew" href="{{route('harvest.my-product')}}">Produk Saya</a></div>
<h1>Mulai Penanaman</h1>
<hr>
<form method="POST" action="{{route('harvest.next-start-plant')}}">
{{csrf_field()}}
<table class="table">
	<tr>
		<td>Produk</td>
		<td><select name="id_product" type="text">
			@foreach($product as $key)
				<option value="{{$key->id}}">{{$key->name}}</option>
			@endforeach
		</select></td>
	</tr>
	<tr>
		<td>Mulai Penanaman</td>
		<td><input type="text" class="for_date" name="plant_date"></td>
	</tr>
	<tr>
		<td>Perkiraan Panen</td>
		<td><input type="text" class="for_date" name="harvest_date_predict"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Selanjutnya"></td>
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