<?php
	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'mid_exam');
		return $conn;
	}
	function validate($uname, $password){

		$conn = getConnection();
		
		$sql = "select * from users where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return count($user);
	}
	function register($uname, $password, $email){

		$conn = getConnection();
		$sql = "insert into users values('', '{$uname}','{$password}', '{$email}', 0)";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}
	function userView()
	{
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

?>
