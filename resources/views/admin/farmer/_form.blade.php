<strong>Basic Identity</strong>
<table>
	<tr>
		<td>Identity Number</td>
		<td><input type="text" name="nik" value="{{$farmer->nik or ''}}"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="{{$farmer->name or ''}}"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><textarea type="text" name="address">{{$farmer->address or ''}}</textarea></td>
	</tr>
</table>
<strong>Account Info</strong>
<table>
	<tr>
		<td>Phone Number</td>
		<td><input type="text" name="phone" value="{{$farmer->phone or ''}}"></td>
	</tr>
	<tr>
		<td>PIN</td>
		<td><input type="text" name="pin" value="{{$farmer->pin or ''}}"></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit">Save</button></td>
	</tr>
</table>