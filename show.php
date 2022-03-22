<?php 
include 'database.php';
$db = new database();
?>
<h1>PHP MVC Tutorial</h1>
<h3>User Information</h3>

<a href="input.php">Add New User</a>
<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Age</th>
		<th>Action</th>
	</tr>
	<?php
	foreach($db->show_data() as $x){
	?>
	<tr>
		<td><?php echo $x['id'] ?></td>
		<td><?php echo $x['name']; ?></td>
		<td><?php echo $x['address']; ?></td>
		<td><?php echo $x['age']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&act=edit">Edit</a>
			<a href="controller.php?id=<?php echo $x['id']; ?>&act=delete">Delete</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>