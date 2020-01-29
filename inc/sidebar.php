<!-- Sidebar -->
			<div class="col-md-2">
				
				<div class="sidebar">
	<!--recent post section start here -->
						<div class="card sidebar sidebar_card_width">
							<div class="card-header">
							   Recent Posts
							</div>
						  <div class="card-body">
						  	<div class="row"> 

						  		<?php 

						  			$query = "SELECT * FROM blog ORDER BY post_id DESC LIMIT 4";

						  			$latestPost = mysqli_query($connection,$query);

						  			while ($row = mysqli_fetch_assoc($latestPost)) {
						  				$id 		= $row['post_id'];
						  				$title 		= $row['post_title'];
						  				$desc 		= $row['post_desc'];
						  				$photo		= $row['post_thumb'];
						  				$author 	= $row['post_author'];
						  				$time 		= $row['post_date'];
						  				$category 	= $row['post_category'];
						  				$status		= $row['post_status'];
						  				?>
						  					<div class="col-md-4">
									  			<img src="admin/img/posts/<?php echo $photo; ?>" class="card-body-img" >
									  		</div>
									  		<div class="col-md-8">
									  			<div class="row">
									  				<div class="rp">
									  					<a href="singlePost.php?post_id=<?php echo $id;?>" ><h6><?php echo $title; ?></h6></a>
									  					<p><?php echo $time; ?></p>
									  				</div>
									  			</div>
									  		</div>
						  				<?php
						  			}
						  		?>
						  		
						  	</div>					    
						  </div>
						</div>
	<!-- Categories option-->
					<div class="card sidebar sidebar_card_width">
						<div class="card-header">
						   Categories
						</div>
					  <div class="card-body">
					  	<?php 

					  		$query = "SELECT * FROM categories";

					  		$cat_group = mysqli_query($connection, $query);

					  		while ($row = mysqli_fetch_assoc($cat_group)) {

					  			$cat_id		= $row['cat_id'];
					  			$cat_name 	= $row['cat_name'];

					  			?>
					  			<a href="">
							    	<div class="row"> 
							    		<div class="col-md-8">
							    		<a class="card-text sidebar_cat"href="index.php?catID=<?php echo $cat_id; ?>" style=""><?php echo $cat_name; ?></a> 
							    		</div>
							    		<div class="col-md-4">
							    			<p class="post_count"> <?php echo no_of_post($cat_name); ?> </p>
							    		</div>
							    	</div>
							    </a>
						<?php
					  		}
					  	?>
					    
					  </div>
					</div>
						<!--End of catagories section-->

	<!--start Tag section here -->
						<div class="card sidebar sidebar_card_width">
							<div class="card-header">
							   Tags
							</div>
						  <div class="card-body">
						  	<?php 

						  		$query = "SELECT * FROM categories";

						  		$cat_group = mysqli_query($connection, $query);

						  		while ($row = mysqli_fetch_assoc($cat_group)) {
						  			$cat_name = $row['cat_name'];
						  			?>
						  			<a href=""  style="padding: 4px 5px"> 
								    	<button class="btn btn-outline-primary btn-sm">
								    		<?php echo "#". $cat_name;?>
								    	</button> 
								    </a>
							<?php
						  		}
						  	?>	    
						  </div>
						</div>
				</div>
			</div>