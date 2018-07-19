<?php
include "assets/header.php";
if(empty($_SESSION['id']))
		{
			 ?>
			 <script> window.location.href="login.php";</script>
			 <?php 
		}else{
			$ok = $_SESSION['id'];
		}
		  
		$query= $class->fetchdata(" select * from users where id='$ok'");
		$profile=$query->fetch(PDO::FETCH_ASSOC);

 	         


?>	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1 >   <span class="glyphicon glyphicon-cog"></span>Admin Area  <small>Personal Information</small></h1>
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
	 <li class="active"> Profile </li>
	 </ol>
	 
	 </div>
	 </section>
		<!-- End of  Breadcrum-->


				<!-- Main -->
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-6 col-sm-offset-3  col-sm-offset-4">
				<div class=" well">
				
				<!--image by Javascript-->
				<center>
				
					<label>
					<img src="../images/<?php echo $profile['img'];?>" alt="" class="img-responsive thumbnail"  style="width:250px;height:250px; border-radius:250px;" id="image"/>
					</label>
                 
				 </center>
				<!--End Of Js Code-->
				<div class="table-responsive thumbnail">
				<table class="table table-hover ">
				<thead>
				  <tr>
					<th> Your Information </th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>Name</td>
					<td><?php echo $profile['name']; ?></td>
				  </tr>
				  <tr>
					<td>Password</td>
					<td>
					<input type="password" value="<?php echo $profile['pass']; ?>" id="myInput">
					<input type="checkbox" onclick="myFunction()">Click here

					</td>
				  </tr>
				<tr>
					<td>Email</td>
					<td><?php echo $profile['email']; ?></td>
				  </tr>
				  <tr>
					<td>Mobile</td>
					<td><?php echo $profile['mobile']; ?></td>
				  </tr>
				  <tr>
					<td>City</td>
					<td><?php echo $profile['city']; ?></td>
				  </tr>
				  <tr>
					<td>Gender</td>
					<td><?php echo $profile['gender']; ?></td>
				  </tr>
				  <tr>
					<td>Address</td>
					<td><?php echo $profile['address']; ?></td>
				  </tr>
				</tbody>
			  </table>
				</div>
				</div>
				
				
				</div>
				</div><!--End of Row-->
				
				
				
				
				
				</div><!--ENd of Main Row-->
				
				</section>
				
				<!-- End oF  Main -->
	 <!--Footer-->
	 <?php 
	 
	 include "assets/footer.php";
	 ?>