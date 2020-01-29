<?php include "inc/header.php"; ?>

        <!-- Begin Page Content -->
        <div class="container">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Register New User</h1>

<?php

	$message = '';

	if ( isset($_POST['register']) ){

		$fullname 	= $_POST['fullname'];
		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
		$phone 		= $_POST['phone'];
		$address 	= $_POST['address'];

		$image 			= $_FILES['image']['name'];
		$image_tmp 		= $_FILES['image']['tmp_name'];

		//random number generator
		$number	= rand(0,10000000);
		// Encrypted Password
		$hassedPassword = sha1($password);
		//set a random no infront of the image name
		$updatedName = $number.$image;
		// move image into the directory
		move_uploaded_file($image_tmp,"img/users/$updatedName");



		if ( empty($fullname) || empty($username) || empty($hassedPassword) || empty($email) || empty($phone) || empty($address) || empty($image))
		{
			$message = '<div class="alert alert-warning">Please Fillup all the Users Information Correctly</div>';
		}
		else{

			$query = "INSERT INTO users (fullname, username, password, email, phone, address, avater) VALUES ( '$fullname', '$username', '$hassedPassword', '$email', '$phone', '$address','$updatedName')";

			$add_new_user = mysqli_query($connection, $query);

			if ( !$add_new_user ){
				die("Query Failed ". mysqli_error($connection));
			}
			else{
				header("Location: allusers.php");
			}
		}		
	}

?>


          <div class="row">
          	<div class="col-md-6 offset-md-3">
          		<div class="card shadow mb-4">
						<div class="card-header py-3">
						  <h6 class="m-0 font-weight-bold text-primary">Register New User</h6>
						</div>
						<div class="card-body">
						  	<form action="" method="POST" enctype="multipart/form-data">
						  		<div class="form-group">
						  			<label for="fullname">Full Name</label>
						  			<input type="text" name="fullname" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<label for="username">Username</label>
						  			<input type="text" name="username" class="form-control" required="required">
						  		</div>

						  		<div class="form-group">
						  			<label for="password">Password</label>
						  			<input type="password" name="password" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<label for="email">Email</label>
						  			<input type="email" name="email" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<label for="phone">Phone</label>
						  			<input type="text" name="phone" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<label for="address">Address</label>
						  			<input type="text" name="address" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<label for="image">Profile Photo</label>
						  			<input type="file" name="image" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<input type="submit" name="register" value="Register" class="btn btn-primary">
						  		</div>
						  	</form>

						  	<?php

						  		echo $message;

						  	?>
						</div>
					</div>
          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php include "inc/footer.php"; ?>





