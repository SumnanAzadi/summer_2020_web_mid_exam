<?php 

	require_once('config.php');

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="index.php">Back</a> |
	<a href="logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>User ID</th>
			<th>UserName</th>
			<th>Email</th>
			<th>Type</th> 
		</tr>
		
		<?php 
			$result = userView();
			while ($rows = mysqli_fetch_assoc($result)) {
			
		?>
		<tr align="center">
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['username']; ?></td>
			<td><?php echo $rows['password']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['type']; ?></td>
		</tr>
		<?php 
			}
		 ?>

	</table>
</body>
</html>