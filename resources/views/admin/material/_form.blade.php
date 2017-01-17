<hr>
<strong>Data Bahan Pokok</strong>
<hr>
<table class="table">
	<tr>
		<td style="width: 30%;">Nama Bahan Pokok</td>
		<td><input required type="text" name="name" value="{{$name or ''}}" placeholder="Contoh : Bibit Padi"></td>
	</tr>
	<tr>
		<td>Supplier</td>
		<td><input required type="text" name="supplier" value="{{$supplier or ''}}" placeholder="Contoh : PT. ABC"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input required type="text" name="modal" value="{{$modal or ''}}" placeholder="Contoh : 20000"></td>
	</tr>
	<tr>
		<td>Satuan</td>
		<td><input required type="text" name="units" value="{{$units or ''}}" placeholder="Contoh : kg"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><textarea required type="text" name="description" placeholder="Contoh : Bibit yang direkomendasikan">{{$description or ''}}</textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>