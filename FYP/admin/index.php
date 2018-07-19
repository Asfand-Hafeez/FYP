<?php
include "assets/header.php";
$class->update("UPDATE `users` SET `status`= '1' WHERE id = '$ok'");
$users= $class->fetchdata("select * from users where email !='asfand@gmail.com' ");

$userdetail= $class->fetchdata("select * from users where email !='asfand@gmail.com' ");

$post= $class->fetchdata("select * from post where user_id='$ok'");
$postcount= $class->fetchdata("select * from post");

?>
				 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row ">
	
	<div class="col-sm-10 ">
	<h1 >   <span class="glyphicon glyphicon-cog"></span>DashBoard <small>Manage Your Site</small></h1>
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
	 
		<!--  Breadcrum-->

	 <section id="breadcrumb"> 
	 <div class="container"> 
	 <ol class="breadcrumb">
	 <li class="active"> DashBoard </li>
	 </ol>
	 
	 </div>
	 </section>
		<!-- End of  Breadcrum-->


				<!-- Main -->
	 
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-2 hidden-xs">
				<div class="thumbnail">
				<img src="../images/<?php echo $data['img'];?>" alt="" class="img-responsive" />
				
				<b>
				<p class="text-center"><?php echo $data['name'];?></p> </b>
				<p> 
				<a href="profile.php?id=<?php echo $data['id'];?>" type="button" class="btn btn-primary save_button">Profile</a>
				
				</p>
				<p> 
				<a href="editprofile.php?id=<?php echo $data['id'];?>" type="button" class="btn btn-danger save_button">Edit</a>
				
				</p>
				
				
				</div>
				</div><!--End of col 1-->
				<div class="col-sm-10"> 
				<div class="row hidden-lg">
				<div class="col-sm-12 "> 
			
				
				</div>
				
				</div><!--End of Inside Row 1-->
				<div class="row">
				<div class="col-sm-12">
				<div class="panel panel-default ">
				  <div class="panel-heading main-color-bg">
					<h3 class="panel-title" > <p class="text-center">Website Overview </p></h3>
				  </div>
				  <div class="panel-body hidden-xs">
					<?php
					if($data['role']=="admin")
					{
					?>
					<div class="col-sm-6">
					<div class="well dash-box">
					<h2>  <span class="glyphicon glyphicon-user"></span> <?php echo $users->rowCount();?></h2>
					<h4>Users</h4>
					</div>
					</div><!--ENd OF 1 Column-->
					<div class="col-sm-6">
					<div class="well dash-box">
					<h2>  <span class="glyphicon glyphicon-pencil"></span><?php echo $postcount->rowCount();?></h2>
					<h4>Posts</h4>
					</div>
					</div><!--ENd OF 1 Column-->
					
					<?php
					}else{
						?>
						<div class="col-sm-12">
					<div class="well dash-box">
					<h2>  <span class="glyphicon glyphicon-pencil"></span><?php echo $post->rowCount();?></h2>
					<h4>Posts</h4>
					</div>
					</div><!--ENd OF 1 Column-->
			
					<?php
					}
					?>
					
					
					
					
				  </div>
				</div>
				
				</div><!--End of col -->
				
				</div><!--End of Inside Row 2-->
				
				<!--Users--->
				
				<?php
					if($data['role']=="admin")
					{
					?>
						<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading main-color-bg">User</div>
				<div class="panel-body scrollable-panel">
			  <!-- Table -->
			   <table class="table">
			  <thead class="thead-dark">
				<tr>
				 <th scope="col">Image</th>
				  <th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Mobile</th>
				  <th scope="col">Action</th>
				  
				</tr>
			  </thead>
			  <tbody>
				<?php
	
		while($detail=$userdetail->fetch(PDO::FETCH_ASSOC))
		{
			extract($detail);
			?>
				<tr>
				   <td><img src="../images/<?php echo $img;?>" style="width:50px;height:50px;"/></td>
					<td><?php echo $name ?></td>
				  <td><?php echo $email ?></td>
				  <td><?php echo $mobile ?></td>
				  <td id="location">
				  <?php
				  if($data['email']=="asfand@gmail.com")
				  {
				  if($role=="admin")
				  {
				  ?>
				  <a href="makeadmin.php?status=user&id=<?php echo $detail['id'];?>" type="button" class="btn btn-danger">Removed From Admin</a>				  
				  <?php
				  }else{
				  ?>
				  <a href="makeadmin.php?status=admin&id=<?php echo $detail['id'];?>" type="button" class="btn btn-success">Make User</a>
				  <?php
				  }
				  }else{
				  echo $role;
				  }?>
				  </td>
					</tr>
				<?php 
		}
		?>
			
			
			  </tbody>
			</table>
			</div>
			</div>
					
					<?php
					}else{
						?>
						<!--ENd OF uSer-->
							<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading main-color-bg">Posts</div>
				<div class="panel-body scrollable-panel">
			  <!-- Table -->
			  <table class="table">
			  <thead class="thead-dark">
				<tr>
				 <th scope="col">Image</th>
				  <th scope="col">Title</th>
				  <th scope="col">Price</th>
				 
				</tr>
			  </thead>
			  <tbody>
					<?php
	
		while($userpost=$post->fetch(PDO::FETCH_ASSOC))
		{
			extract($userpost);
			?>
				<tr>
				   <td><img src="../images/<?php echo $img1;?>" style="width:50px;height:50px;"/></td>
					<td><?php echo $title ?></td>
				  <td><?php echo $price ?></td>
				
				 </tr>
				<?php 
		}
		?>
			  </tbody>
			</table>
			</div>
			</div>
							
			
					<?php
					}
					?>
					
							
				<!---ENd OF Users--->
				
				
				</div><!--End of col 2-->
				
				
				
				
				
				</div><!--ENd of Main Row-->
				</div>
				</section>
				<!-- End oF  Main -->
				
				<?php
				
				include "assets/footer.php";
				
				?>