<?php

require "assets/header.php";
$pending= $class->fetchdata("select * from post where status='pending' and user_id!='$ok'");

?>	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1 >   <span class="glyphicon glyphicon-cog"></span>Admin Area <small>Post Management</small></h1>
	</div>
	
	<div class="col-sm-2">
				
			<div class="dropdown creat">
			  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Create Content
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
				<li><a href="addpost.php">Add Post</a></li>
				
				<?php
					if($data['role']=="admin")
					{
					?>
					<li><a href="category.php">Add Categories</a></li>
					<li><a href="users.php">User</a></li>
					<li><a href="mypost.php">Details</a></li>
					<?php
					} else {
					?>
				<li><a href="active.php">Details</a></li>
				
				<?php
					}
				?>
				
			  </ul>
			</div>
	</div>
	</div>
	 </div>
	 </header>
	 <!-- End Of header-->
	 
	

				<!-- Main -->
	 
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-12"> 
			
				
				<?php
					if($data['role']=="admin")
					{
					?>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<ul class="nav nav-tabs">
        		<li class="nav-item">
        			<a href="mypost.php" class="nav-link active">Admin Post</a>
        		</li>

        		<li class="nav-item">
        			<a href="userpost.php" class="nav-link">User's Active Post</a>
        		</li>
				<li class="nav-item">
        			<a href="userpendingpost.php" class="nav-link">User's Pending Post</a>
        		</li>
				</ul>
				
				<table class="table">
			  <thead class="thead-dark">
				<tr>
				 <th scope="col">Image</th>
				  <th scope="col">Title</th>
				  <th scope="col">price</th>
				  <th scope="col">By</th>
				<th scope="col">Current Status/Details</th>
				  
				</tr>
			  </thead>
			  <tbody>

						<?php
	
		while($detail=$pending->fetch(PDO::FETCH_ASSOC))
		{
			extract($detail);
			?>
							<tr>
				   <td><img src="../images/<?php echo $img1;?>" style="width:50px;height:50px;"/></td>
					<td><?php echo $title ?></td>
				  <td><?php echo $price ?></td>
				  <td style="text-transform:capitalize;">
				  <?php 
				  
			$user= $class->fetchdata("SELECT * FROM `users` WHERE id = '$user_id'");
			$userName=$user->fetch(PDO::FETCH_ASSOC);
				echo $userName['name'];  
				
				  ?></td>
				  <td>
	<a href="poststatus.php?id=<?php echo $id; ?>&status=active" type="button" class="btn btn-danger"><?php echo $status;?></a> 
	<a href="detail.php?id=<?php echo $id; ?>" type="button" class="btn btn-success">Detail</a> </td>
					</tr>
				
					
		<?php }
		?>
		 </tbody>
			</table>
				</div>
				<?php 
					
				}else 
				{
				?>
			 
			 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        	
        	
				<ul class="nav nav-tabs">
        		<li class="nav-item">
        			<a href="active.php" class="nav-link active">Active Post</a>
        		</li>

        		<li class="nav-item">
        			<a href="pending.php" class="nav-link">Pending Post</a>
        		</li>

        		<li class="nav-item">
        			<a href="deletepost.php" class="nav-link">Delete  Post</a>
        		</li>

        		
				</ul>
				</div>
			 
				<?php
				} 
				?>
				
				</div><!--End of col 1-->
				
				
				
				
				
				</div><!--ENd of Main Row-->
				</div>
				</section>
				<!-- End oF  Main -->
	 <!--Footer-->
	 
	 
	 <!--End Of footer-->
	 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>