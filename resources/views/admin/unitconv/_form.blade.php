<hr>
<strong>Data Unit Konversi</strong>
<hr>
<table class="table">
	<tr>
		<td style="width: 30%;">Satuan Asal</td>
		<td><input required type="text" name="from_unit" value="{{$from_unit or ''}}" placeholder="Contoh : kg"></td>
	</tr>
	<tr>
		<td>Satuan Tujuan</td>
		<td><input required type="text" name="to_unit" value="{{$to_unit or ''}}" placeholder="Contoh : g"></td>
	</tr>
	<tr>
		<td>Jumlah Asal</td>
		<td><input required type="text" name="from_amount" value="{{$from_amount or ''}}" placeholder="Contoh : 1"></td>
	</tr>
	<tr>
		<td>Jumlah Asal</td>
		<td><input required type="text" name="to_amount" value="{{$to_amount or ''}}" placeholder="Contoh : 1000"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>