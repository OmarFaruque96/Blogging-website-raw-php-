<?php include "inc/header.php";?>

<section>
	<hr>

	<div class="container">

		<div class="row">
			<!--start right side blog post part-->
			<div class="col-md-10 leftbar">
				
				<div class="row">
					<?php
						if(isset($_GET['catID'])){
							$id=$_GET  ['catID'];

							$q = "SELECT cat_name FROM categories WHERE cat_id = '$id'";
							$res = mysqli_query($connection,$q);
							while($row = mysqli_fetch_assoc($res)){
								$name=$row['cat_name'];
							}
							
							$query = "SELECT * FROM blog WHERE post_category='$name'";

							$result = mysqli_query($connection,$query);

							while($row = mysqli_fetch_assoc($result)){
								$post_title 	= $row['post_title'];
								$post_details 	= $row['post_desc'];
								$date 			= $row['post_date'];
								$author 		= $row['post_author'];
								$picture 		= $row['post_thumb'];
								$post_cat 		= $row['post_category'];

						?>
						<?php 

							$query = "SELECT * FROM users WHERE fullname = '$author'";

							$authorDetails = mysqli_query($connection, $query);

							while ($row = mysqli_fetch_assoc($authorDetails)) {
								$authorPhoto = $row['avater'];
							}
						?>
				<!--left side blog view start here-->
					<div class="col-md-5 innerbar">
						<div class="blog">
							<!--right side card start here -->
							<div class="card leftbar_card_width">
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
													<!--user image-->
													<img src="admin/img/users/<?php echo $authorPhoto;?>" class="rounded" style="height: 50px;width: 50px">
												</div>
												<div class="col-md-8">
													<p> <?php echo $author;?>  </p>
												</div>
											</div>
										</div>
										<div class="col-md-5">
											<p> <?php echo $date; ?> </p>
										</div>
										<div class="col-md-2">
											<p>16</p>
										</div>
									</div>
								<!-- author details end here-->
							  </div>
							</div>	
						</div>
					</div>
				<?php
						}
					}else{
	// index default post section start here 
	// always shown in the first page 							
							$query = "SELECT * FROM blog ORDER BY post_id DESC LIMIT 4";

							$result = mysqli_query($connection,$query);

							while($row = mysqli_fetch_assoc($result)){
								$post_title 	= $row['post_title'];
								$post_details 	= $row['post_desc'];
								$date 			= $row['post_date'];
								$author 		= $row['post_author'];
								$picture 		= $row['post_thumb'];
								$post_cat 		= $row['post_category'];

								$query2 = "SELECT * FROM users WHERE fullname = '$author'";

								$authorDetails = mysqli_query($connection, $query2);

								while ($row = mysqli_fetch_assoc($authorDetails)) {
									$authorPhoto = $row['avater'];
									//echo $authorPhoto;
								}

						?>
						
						<!--left side blog view start here-->
							<div class="col-md-5 innerbar">
								<div class="blog">
									<!--right side card start here -->
									<div class="card leftbar_card_width">
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


															<img src="admin/img/users/<?php echo $authorPhoto;?>" class="rounded" style="height: 50px;width: 50px">
														</div>
														<div class="col-md-8">
															<p> <?php echo $author;?>  </p>
														</div>
													</div>
												</div>
												<div class="col-md-5">
													<p> <?php echo $date; ?> </p>
												</div>
												<div class="col-md-2">
													<p>16</p>
												</div>
											</div>
										<!-- author details end here-->
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

			<!--end of the left blog post part-->

			<?php include "inc/sidebar.php"; ?>

		</div>
	</div>
	<hr>
</section>

<section class="pagination_section"> 
	<nav aria-label="Page navigation example">
	  <ul class="pagination justify-content-center">
	    <li class="page-item disabled">
	      <a class="page-link" href="#" tabindex="-1">Previous</a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item"><a class="page-link" href="#">4</a></li>
	    <li class="page-item"><a class="page-link" href="#">5</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#">Next</a>
	    </li>
	  </ul>
	</nav>
	<hr>
</section>


<?php include "inc/footer.php"; ?>
    

   