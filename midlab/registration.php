<?php
	require_once('config.php');
	if(isset($_POST['submit'])){
		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		$email = $_POST['email'];

		if(empty($uname) == true || empty($password) == true || empty($email) == true){
			echo "null submission!";
		}else{

			$status = register($uname, $password, $email);

			if($status){
				header('location:login.php?msg=success');
			}else{
				
			}
		}

	}else{
		header('location:registration.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
</head>
<body>
	<table border="1" width="50%" height ="350px" align="center">
		<tr>
			<td>
				<h2>Tesla, Inc.</h2>
			</td>
			<td align="right">
				<a href="index.php">Home</a>|
				<a href="login.php">Login</a>|
				<a href="registration.php">Registration</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<form method="POST" action="">
					<fieldset>
						<legend>REGISTRATION</legend>
						<form method="POST">
							<table>
								<tr>
									<td>ID:</td>
									<td>:<input type="text" name="id"></td>
								</tr>
								<tr>
									<td>Name</td>
									<td>:<input type="text" name="uname"></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:<input type="text" name="email"></td>
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td>Password</td>
									<td>:<input type="Password" name="pass"></td>
								</tr>
								<tr>
									<td>Confirm Password
									</td>
									<td>:<input type="Password" name="conpass">
									</td>
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td colspan="2">
										<fieldset>
											<legend>USER TYPE</legend>
											<input type="radio" name="role" value="user">user
											<input type="radio" name="role" value="admin">admin
										</fieldset>
										<hr>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="submit" value="Submit">
										<a href="login.php">Login</a>
									</td>
								</tr>
							</table>
						</form>
					</fieldset>
				</form>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				Copyright &copy; 2020
			</td>
		</tr>
	</table>
</body>
</html>