<?php include "inc/header.php"; ?>

		<!-- Begin Page Content -->
		<div class="container">

			<!-- Page Heading -->
			<h1 class="h3 mb-4 text-gray-800">View All Users</h1>

			<div class="row">
				<div class="col-md-12">
					<!-- All Users Information -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
						  <h6 class="m-0 font-weight-bold text-primary">Welcome Admin, Here is all the Users Information for you.</h6>
						</div>
						<div class="card-body">
						  	<table class="table">
								<thead class="thead-dark">
									<tr>
									  <th scope="col">#</th>
									  <th scope="col">Profile Photo</th>
									  <th scope="col">Full Name</th>
									  <th scope="col">Username</th>
									  <th scope="col">Email</th>
									  <th scope="col">Phone</th>
									  <th scope="col">Address</th>
									  <th scope="col">Action</th>
									</tr>
								</thead>

								<tbody>

			<?php 
				$query = "SELECT * FROM users";
				$select_all_users = mysqli_query($connection, $query);
				$i = 0;
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
					$i++;
					?>
					<tr>
					  <th scope="row"><?php echo $i; ?></th>
					  <td><img src="img/users/<?php echo $avater; ?>" width="100" height=""></td>
					  <td><?php echo $fullname; ?></td>
					  <td><?php echo $username; ?></td>
					  <td><?php echo $email; ?></td>
					  <td><?php echo $phone; ?></td>
					  <td><?php echo $address; ?></td>
					  <td>
					  	<div class="btn-group">
					  		<a href="edituser.php?update=<?php echo $id; ?>" class="btn btn-primary">Update</a>

					  		<a href="allusers.php?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
					  	</div>
										  </td>
										</tr>

										<?php

									}
								?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /.container-fluid -->


		<?php // Delete User Function Added Here
			deleteUser();
		?>

	</div>
	<!-- End of Main Content -->

<?php include "inc/footer.php"; ?>
