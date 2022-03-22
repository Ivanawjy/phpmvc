<h1>PHP MVC Tutorial</h1>
<h3>Add User Information</h3>

<form action="controller.php?act=add" method="post">
	
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><input type="text" name="address"></td>
	</tr>
	<tr>
		<td>Age</td>
		<td><input type="text" name="age"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Save Information"></td>
	</tr>
</table>
</form>