<hr>
<strong>Data Produk</strong>
<hr>
<table class="table">
	<tr>
		<td style="width: 30%;">Nama Produk</td>
		<td><input required type="text" name="name" value="{{$name or ''}}" placeholder="Contoh : Beras"></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td><input required type="text" name="modal" value="{{$modal or ''}}" placeholder="Contoh : 10000"></td>
	</tr>
	<tr>
		<td>Satuan</td>
		<td><input required type="text" name="units" value="{{$units or ''}}" placeholder="Contoh : liter"></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td><textarea required type="text" name="description" placeholder="Contoh : Beras hasil terbaik">{{$description or ''}}</textarea></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>