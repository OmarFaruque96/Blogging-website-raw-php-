<?php
	include "../../inc/db.php";

	session_start();

	if ( isset($_POST['login']) ){
		$usermail = $_POST['usermail'];
		$password = $_POST['password'];

		$username = mysqli_real_escape_string($connection, $usermail);
		$password = mysqli_real_escape_string($connection, $password);

		$hassedPass = sha1($password);


		$query = "SELECT * FROM users WHERE email = '$usermail' ";

		$select_user = mysqli_query($connection, $query);

		while ($row = mysqli_fetch_array($select_user) ) {
			
			$_SESSION['userid'] 	= $row['id'];
			$_SESSION['fullname'] 	= $row['fullname'];
			$_SESSION['username'] 	= $row['username'];
			$_SESSION['password'] 	= $row['password'];
			$_SESSION['email'] 		= $row['email'];
			$_SESSION['avater'] 	= $row['avater'];

		}

		if ( $_SESSION['email'] !== $usermail &&  $_SESSION['password']!== $hassedPass ){
			header("Location: ../index.php");
		}
		else if ( $_SESSION['email'] == $usermail &&  $_SESSION['password'] == $hassedPass ){
			header("Location: ../dashboard.php");
		}
		else{
			header("Location: ../index.php");
		}
	}

?>