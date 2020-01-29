<?php

	// Delete User Function Added Here
	function deleteUser(){

		global $connection;

		if ( isset($_GET['delete']) ){
			$id = $_GET['delete'];
			$query = "DELETE FROM users WHERE id='$id'";

			$delete_users = mysqli_query($connection, $query);

			if ( !$delete_users ){
				die("Query Failed ". mysqli_error($connection));
			}
			else{
				header("Location: allusers.php");
			}
		}

	}

	// count post in index.php (sidebar categories)
	function no_of_post($n){

		global $connection;

		$query = "SELECT post_category FROM blog WHERE post_category = '$n'";
		$result = mysqli_query($connection,$query);

		$value = 0;
		while ($row = mysqli_fetch_assoc($result)) {
			$post_title = $row['post_category'];
			$value++;
		}
		echo $value;
	}


	// read comments from database for a specific blog
	function read_comments(){

		global $connection;

		
	}


?>