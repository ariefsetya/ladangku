<hr>
<strong>Info Akun</strong>
<hr>
<table class="table">
	<tr>
		<td>Nama</td>
		<td><input required type="text" name="name" value="{{$name or ''}}" placeholder="Contoh : John Doe"></td>
	</tr>
	<tr>
		<td style="width: 30%;">E-Mail</td>
		<td><input required type="email" name="email" value="{{$email or ''}}" placeholder="Contoh : email@domain.com"></td>
	</tr>
	<tr>
		<td style="width: 30%;">Password</td>
		<td><input type="password" name="password" value="" {{!isset($password)?'required':''}}  minlength="8"  placeholder="{{isset($password)?'Kosongkan jika tidak diganti':'Contoh : abcdef'}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>