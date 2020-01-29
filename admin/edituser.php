<?php include "inc/header.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Register New User</h1>


          <?php 

          	if ( isset($_GET['update']) ){
          		$id = $_GET['update'];


          		$query = "SELECT * FROM users WHERE id='$id'";
				$select_all_users = mysqli_query($connection, $query);
				while ( $row = mysqli_fetch_assoc($select_all_users) )
				{
					$id 		= $row['id'];
					$fullname 	= $row['fullname'];
					$username 	= $row['username'];
					$password 	= $row['password'];
					$email 		= $row['email'];
					$phone 		= $row['phone'];
					$address 	= $row['address'];

					$avater 	= $row['avater'];
					?>

		<div class="row">
          	<div class="col-md-6 offset-md-3">
          		<div class="card shadow mb-4">
						<div class="card-header py-3">
						  <h6 class="m-0 font-weight-bold text-primary">Update User Profile</h6>
						</div>
						<div class="card-body">
						  	<form action="" method="POST" enctype="multipart/form-data">
						  		<div class="form-group">
						  			<label for="fullname">Full Name</label>
						  			<input type="text" name="fullname" class="form-control" value="<?php echo $fullname; ?>">
						  		</div>

						  		<div class="form-group">
						  			<label for="username">Username</label>
						  			<input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
						  		</div>

						  		<div class="form-group">
						  			<label for="password">Password</label>
						  			<input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
						  		</div>

						  		<div class="form-group">
						  			<label for="email">Email</label>
						  			<input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
						  		</div>

						  		<div class="form-group">
						  			<label for="phone">Phone</label>
						  			<input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
						  		</div>

						  		<div class="form-group">
						  			<label for="address">Address</label>
						  			<input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
						  		</div>

						  		<div class="form-group">
						  			<label for="image">Profile Photo</label>
						  			<img src="img/users/<?php echo $avater; ?>" width="200px">
						  			<input type="file" name="image" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<input type="submit" name="update" value="Update Info" class="btn btn-primary">
						  		</div>
						  	</form>
						</div>
					</div>
          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->

			<?php	}
          	}
          ?>



<?php

	if (isset($_POST['update'])){
		//echo $id;
		$fullname 	= $_POST['fullname'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$phone 		= $_POST['phone'];
		$address 	= $_POST['address'];

		$image		= $_FILES['image']['name'];
		$image_tmp	= $_FILES['image']['tmp_name'];

		//random number generator
		$number = rand(0,10000000);
		// concat the num before the image name
		$updatedName= $number.$image;
		// Encrypted Password
		$hassedPassword = sha1($password);

		//move the image from temp to directory folder
		move_uploaded_file($image_tmp, "img/users/$updatedName");

		if ( empty($fullname) || empty($username) || empty($hassedPassword) || empty($email) || empty($phone) || empty($address) || empty($image))
		{
			$query = "UPDATE users SET fullname='$fullname', username='$username', password='$hassedPassword', email='$email', phone='$phone', address='$address', avater = '$avater' WHERE id='$id'";

			$update_user = mysqli_query($connection, $query);

			if ( !$update_user ){
				die("Query Failed ". mysqli_error($connection));
			}
			else{
				header("Location: allusers.php");
			}
		}
		else
		{
			$query = "UPDATE users SET fullname='$fullname', username='$username', password='$hassedPassword', email='$email', phone='$phone', address='$address', avater = '$updatedName' WHERE id='$id'";

			$update_user = mysqli_query($connection, $query);

			if ( !$update_user ){
				die("Query Failed ". mysqli_error($connection));
			}
			else{
				header("Location: allusers.php");
			}

		}		
	}


?>
          

      </div>
      <!-- End of Main Content -->

<?php include "inc/footer.php"; ?>





