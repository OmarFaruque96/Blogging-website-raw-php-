<?php include "inc/header.php"; ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        	<div class="row">
        	<?php

					$query = "SELECT * FROM blog";

					$result = mysqli_query($connection,$query);

					while($row = mysqli_fetch_assoc($result)){
						$post_title 	= $row['post_title'];
						$post_details 	= $row['post_desc'];
						$date 			= $row['post_date'];
						$author 		= $row['post_author'];
						$image 			= $row['post_thumb'];
						$post_cat 		= $row['post_category'];
				?>
					<!--left side blog view start here-->
			<div class="col-md-5">
				<div class="blog">
					<!--right side card start here -->
					<div class="card card_width" style="">
					  <img class="card-img-top"src="img/posts/<?php echo $image;?>" alt="Card image cap">
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
											<img src="img/posts/<?php echo $image;?>" class="rounded" style="height: 50px;width: 50px">
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
									<p>16like</p>
								</div>
							</div>
							<!-- author details end here-->
					  </div>
					</div>	
				</div>
			</div>

		<?php

				}

			?>
        		</div>
        </div>
      </div>
<?php include "inc/footer.php"; ?>

