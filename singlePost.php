<?php include "inc/userheader.php"; ?>

<?php 
	$post_id_value = 0;
	$session_user_id = $_SESSION['userid'];
	$username = $_SESSION['username'];
	$photos = $_SESSION['avater'];
 ?>




<section>
	<hr>

	<div class="container">

		<div class="row">
	<!--start right side blog post part-->
			<div class="col-md-10">
			<?php 

				if(isset($_GET['post_id'])){

				$postid = $_GET['post_id'];

				//echo $postid;
				$post_id_value = $postid;
				//echo $post_id_value;
							
							$query = "SELECT * FROM blog WHERE post_id='$postid'";

							$result = mysqli_query($connection,$query);

							while($row = mysqli_fetch_assoc($result)){
								$post_title 	= $row['post_title'];
								$post_details 	= $row['post_desc'];
								$date 			= $row['post_date'];
								$author 		= $row['post_author'];
								$picture 		= $row['post_thumb'];
								$post_cat 		= $row['post_category'];

								// findout authors photos
						?>
						<?php 

							$query = "SELECT * FROM users WHERE fullname = '$author'";

							$authorDetails = mysqli_query($connection, $query);

							while ($row = mysqli_fetch_assoc($authorDetails)) {
								$authorPhoto = $row['avater'];
							}
						?>

						<div class="blog">
	<!--right side card start here -->
							<div class="card" style="">
							  <img class="card-img-top" src="admin/img/posts/<?php echo $picture;?>" alt="">
							  <div class="card-body">
				<!--card body start here .. after image-->
							    <div class="row">
									<div class="col-sm-4">
										<div class="left_date_view" style="">
											<h6><?php echo $date;?> </h6>
										</div>
									</div>
									<div class="col-sm-4">
										
									</div>
									<div class="col-sm-4">
										<div class="right_cat_name" style="">
											<h6><?php echo $post_cat;?></h6>
										</div>
									</div>
								</div>
								<div class="title">
									<h1><?php echo $post_title;?></h1>
								</div>
								<hr style="border: 1px solid grey">
								<div class="postDetails" style="padding: 15px 0px">
									<p><?php echo $post_details;?></p>
								</div>
								<!-- author details start here-->
									<div class="row">
										<div class="col-md-5">
											<div class="row">
												<div class="col-md-4">
													<!--//author photos-->
													<img src="admin/img/users/<?php echo $authorPhoto;?>" class="rounded" style="height: 50px;width: 50px">
												</div>
												<div class="col-md-8">
													<p> <?php echo $author;?>  </p>
												</div>
											</div>
										</div>
										<div class="col-md-5">
											<p> 2months Ago </p>
										</div>
										<div class="col-md-2">
											<p>16</p>
										</div>
									</div>

									<?php 
								}
							}
							?>
								<!-- author details end here-->
								<!--comment sectioon start from here-->
								<hr style="border: 1px solid grey">
								<div class="comments">
									<div class="title">
										<h3>Comments <hr></h3>
									</div>

		<!--comments start here -->		

							<?php 

								//echo $post_id_value;
								$query = "SELECT * FROM comment WHERE post_id='$post_id_value'";

								$result = mysqli_query($connection, $query);

								while ( $row = mysqli_fetch_assoc($result) ) {
									
									$userid 	= 	$row['id'];
									$comment 	= 	$row['comment_desc'];

									$query2 = "SELECT * FROM users WHERE id = '$userid'";
									$authorDetails2 = mysqli_query($connection, $query2);

									while ($row = mysqli_fetch_assoc($authorDetails2)) {
										$cmntauthorname  = $row['fullname'];
										$cmntauthorPhoto = $row['avater'];
									}

									
							?>
							<div class="row">
										<!--comment image section (left part)-->
										<div class=" col-sm-2 ">
											<img src="admin/img/users/<?php echo $cmntauthorPhoto; ?>" width="60px" class="rounded">
										</div>
										<!--comments section (right part)-->
										<div class="col-sm-10">
											<!--upper part (name and time)-->
											<div class="row">
												<div class="">
													<h5><?php echo $cmntauthorname; ?></h5>	
												</div>
											</div>
											<!--real comments-->
											<div class="row">
												<p><?php echo $comment; ?></p>
											</div>
										</div>
										<!--outer comments end here-->
							</div>
							<hr>

							<?php
								}

							?>

								</div>
								<hr style="border: 1px solid grey">	
						<!--comment section end here-->

		<!--comment box section start here-->
							<div class="leaveComment">
								<div class="title">
									<h3>Leave A Comment Here<hr></h3>
								</div>
								<form method="POST" action="">
									<div class="row">
										<div class="col-md-10">
											<textarea class="form-control" rows="8" name="commentText" placeholder="Leave your comment here !"></textarea>
										</div>
									</div>
									<button href="" style="margin-top: 10px" type="submit" name="comment" class="btn btn-bg btn-outline-primary">Submit Comment</button>
								</form>
							</div>



<?php
	
	if(isset($_POST['comment'])){

			
			$commentText = $_POST['commentText'];

			$commentText = mysqli_real_escape_string($connection, $commentText);

			if(!empty($commentText)){

			$query = "INSERT INTO comment (id,post_id,comment_desc) VALUES ('$session_user_id','$post_id_value','$commentText')";

			$commentInsert = mysqli_query($connection, $query);

			if ( !$commentInsert ){
					die("Query Failed ". mysqli_error($connection));
				}
				else{
					//header("Location: singlePost.php");
				}

			}else{
				echo $post_id_value;
			}

		}
?>

							  </div>
							</div>	
						</div>
			</div>		

			<!--end of the left blog post part-->

			<?php include "inc/sidebar.php"; ?>

		</div>
	</div>
	<hr>

</section>

<?php include "inc/footer.php"; ?>
    

   