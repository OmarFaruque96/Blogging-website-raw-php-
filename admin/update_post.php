<?php include "inc/header.php"; ?>

        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Update Post Information</h1>
          	<?php 
          		if(isset($_GET['update'])){
          			$id = $_GET['update'];
          			
          			$query = "SELECT * FROM blog WHERE post_id='$id'";

          			$all_post_details = mysqli_query($connection,$query);

          			while ($row = mysqli_fetch_assoc($all_post_details)) {
          				$title 			= $row['post_title'];
          				$Post_details 	= $row['post_desc'];
          				$image 			= $row['post_thumb'];
          				$date 			= $row['post_date'];
          				$post_author 	= $row['post_author'];
          				$post_category	= $row['post_category'];

          				?>

						<div class="row">
				          	<div class="col-md-6 offset-md-3">
				          		<div class="card shadow mb-4">
										<div class="card-header py-3">
										  <h6 class="m-0 font-weight-bold text-primary">Update Post</h6>
										</div>
										<div class="card-body">
										  	<form action="" method="POST" enctype="multipart/form-data">
										  		<div class="form-group">
										  			<label for="phone">Post Category</label>
										  			<select class="form-control" name="CategoryType">
										  			 	<?php 
															
																$query = "SELECT * FROM categories";

																$read_cat = mysqli_query($connection, $query);

																while ($row = mysqli_fetch_assoc($read_cat)) {
																	$the_cat_id 	= $row['cat_id'];
																	$the_cat_name 	= $row['cat_name'];
																	?>
																	<option><?php echo $the_cat_name;?></option>
																<?php
															}
															
														?> 
													</select>
										  		</div>

										  		<div class="form-group">
										  			<label for="post_title">Post Title</label>
										  			<input type="text" name="post_title" value="<?php echo $title;?>"class="form-control">
										  		</div>
										  		<div class="form-group">
										  			<label for="post_description">Post Description</label>
										  			<textarea name="postDes" class="form-control"><?php echo $Post_details;?></textarea>
										  		</div>
										  		<div class="form-group">
										  			<label for="author">Author</label>
										  			<input type="text" name="author" value="<?php echo $post_author;?>"class="form-control">
										  		</div>
										  		<div class="form-group">
										  			<label for="image">Image </label>
										  			<img src="img/posts/<?php echo $image;?>"width="200"alt="">
										  			<input type="file" name="image" class="form-control">
										  		</div>

										  		<div class="form-group">
										  			<input type="submit" name="update" value="update" class="btn btn-primary">
										  		</div>
										  	</form>

										  	<?php
										  		
										  	?>
										</div>
									</div>
				          	</div>
				        </div>

          			<?php

          			}
          		}
          	?>
        </div>
      </div>

    			<?php 
    					if (isset($_POST['update'])){
							$type 			= $_POST['CategoryType'];
							$author 		= $_POST['author'];
							$title 			= $_POST['post_title'];

							$description 	= mysqli_real_escape_string($connection,$_POST['postDes']);

							$image        	= $_FILES['image']['name'];
      						$image_tmp    	= $_FILES['image']['tmp_name'];

							move_uploaded_file($image_tmp, "img/posts/$image");

							if (!empty($image))
							{
								$query = "UPDATE blog SET post_title='$title',post_desc='$description',post_thumb='$image',post_date=now(),post_author='$author',post_category='$type',post_status='Published' WHERE post_id='$id'";

								$update_new_post = mysqli_query($connection,$query);

								if ( !$update_new_post ){
									die("Query Failed ". mysqli_error($connection));
								}
								else{
									header("Location: view-all-post.php");
								}
							}
							else{

								$query = "UPDATE blog SET post_title='$title',post_desc='$description',post_date=now(),post_author='$author',post_category='$type',post_status='Published' WHERE post_id='$id'";

								$update_new_post = mysqli_query($connection,$query);

								if ( !$update_new_post ){
									die("Query Failed ". mysqli_error($connection));
								}
								else{
									header("Location: view-all-post.php");
								}
							}
						}

    			?>

<?php include "inc/footer.php"; ?>

