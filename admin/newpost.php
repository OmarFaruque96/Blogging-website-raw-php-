<?php include "inc/header.php"; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">New Post</h1>

		<?php

			

						$message = '';

						if (isset($_POST['post'])){
							$type 			= $_POST['CategoryType'];
							$author 		= $_POST['author'];
							$title 			= $_POST['post_title'];

							$description 	= mysqli_real_escape_string($connection,$_POST['postDes']);

							$image        = $_FILES['image']['name'];
      						$image_tmp    = $_FILES['image']['tmp_name'];

							$date			= date('d-m-y');

							move_uploaded_file($image_tmp, "img/posts/$image");

							if ( empty($type) || empty($author) || empty($title) || empty($description) || empty($image) )
							{
								$message = '<div class="alert alert-warning">Please Fillup all the Users Information Correctly</div>';
							}
							else{

							$query = "INSERT INTO blog (post_title,post_desc,post_thumb,post_date,post_author, post_category) VALUES ('$title','$description','$image',now(),'$author','$type')";

								$add_new_post = mysqli_query($connection,$query);

								if ( !$add_new_post ){
									die("Query Failed ". mysqli_error($connection));
								}
								else{
									header("Location: view-all-post.php");
								}
							}
						}

					?>		
          <div class="row">
          	<div class="col-md-6 offset-md-3">
          		<div class="card shadow mb-4">
						<div class="card-header py-3">
						  <h6 class="m-0 font-weight-bold text-primary">Add a new Post</h6>
						</div>
						<div class="card-body">
						  	<form action="" method="POST" enctype="multipart/form-data">
						  		<div class="form-group">
						  			<label for="phone">Post Category</label>
						  			 <select class="form-control" id="Category" name="CategoryType">
						  			 	<?php 
											
												$query = "SELECT * FROM categories";

												$read_cat = mysqli_query($connection, $query);

												while ($row = mysqli_fetch_assoc($read_cat)) {
													$the_cat_id 	= $row['cat_id'];
													$the_cat_name 	= $row['cat_name'];
													?>
													<option value="<?php echo $the_cat_name?>"><?php echo $the_cat_name?></option>
												<?php
											}
											
										?> 
									  </select>
						  		</div>

						  		<div class="form-group">
						  			<label for="post_title">Post Title</label>
						  			<input type="text" name="post_title" class="form-control">
						  		</div>
						  		<div class="form-group">
						  			<label for="post_description">Post Description</label>
						  			<textarea name="postDes" class="form-control"></textarea>
						  		</div>
						  		<div class="form-group">
						  			<label for="author">Author</label>
						  			<input type="text" name="author" class="form-control">
						  		</div>
						  		<div class="form-group">
						  			<label for="image">Image </label>
						  			<input type="file" name="image" class="form-control">
						  		</div>

						  		<div class="form-group">
						  			<input type="submit" name="post" value="Post" class="btn btn-primary">
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

