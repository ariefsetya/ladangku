<hr>
<strong>Identitas Dasar</strong>
<hr>
<table class="table">
	<tr>
		<td style="width: 30%;">Nomor Identitas</td>
		<td><input required type="text" name="nik" value="{{$nik or ''}}" placeholder="Contoh : 31750431xxxx"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input required type="text" name="name" value="{{$name or ''}}" placeholder="Contoh : John Doe"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea required type="text" name="address" placeholder="Contoh : Jalan Raya Bogor No. 81A">{{$address or ''}}</textarea></td>
	</tr>
</table><hr>
<strong>Info Akun</strong><hr>
<table class="table">
	<tr>
		<td style="width: 30%;">Nomor HP</td>
		<td><input required type="text" name="phone" value="{{$phone or ''}}" placeholder="format : +628387xxxxx"></td>
	</tr>
	<tr>
		<td>PIN</td>
		<td><input required type="text" name="pin" value="{{$pin or ''}}" minlength="4" maxlength="4" placeholder="Contoh: 1234"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>