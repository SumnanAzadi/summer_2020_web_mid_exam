<?php
	
	require_once('functions.php');

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($uname) == true || empty($password) == true || empty($email) == true){
			echo "null submission!";
		}else{

			$status = register($uname, $password, $email);

			if($status){

				header('location:index.php?msg=success');
			}else{
				header('location:registration.php?msg=dberror');
			}
		}

	}else{
		header('location: ../views/reg.php');
	}


?>