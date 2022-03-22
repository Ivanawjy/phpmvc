<?php 
include 'database.php';
$db = new database();
?>

<h1>PHP MVC Tutorial</h1>
<h3>Edit User Information</h3>

<form action="controller.php?act=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="name" value="<?php echo $d['name'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="address" value="<?php echo $d['address'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="age" value="<?php echo $d['age'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update Information"></td>
	</tr>
</table>
<?php } ?>
</form>