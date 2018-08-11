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
		  
		  $id = $_GET['id'];
		$query= $class->fetchdata(" select * from users where id='$ok'");
		$profile=$query->fetch(PDO::FETCH_ASSOC);
if(isset($_POST['done']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];                    
			
			$password= $_POST['pass'];
			$address= $_POST['address'];
			$city= $_POST['city'];
			$mobile= $_POST['mobile'];
			$folder = "../images/";
			$image = $_FILES['image']['name'];
			$path = $folder.$image;
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
			$query=$class->update("UPDATE `users` SET  name='$name' ,email='$email', pass='$password', address='$address',city='$city',mobile='$mobile',img='$image' where id='$ok'");
			if($query){
					
			$class->redirect("index.php");
				}
				else{
					
					echo "Error";
				}
		}
		

 	         


?>
	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1 >   <span class="glyphicon glyphicon-cog"></span>Admin Area <small>Update Profile</small></h1>
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
				<div class="col-sm-6 col-sm-offset-3  col-sm-offset-4">
				<form class="form-signin well"  method="post" enctype="multipart/form-data">
				<h2 class="form-signin-heading text-center">Update Profile</h2>
				<!--image by Javascript-->
				<center>
				<div class="form-group" method="post" enctype="multipart/form-data">
                <div class="image-upload">
					<label for="file-input">
					<img src="../images/<?php echo $profile['img'];  ?>" onchange="showImage.call(this)" style="width:250px;height:250px; border-radius:250px;" id="image"/>
					</label>
					<input id="file-input" id="image"  onchange="showImage.call(this)" type="file" name="image"/>
					</div>    
                 </div>
				 </center>
				<!--End Of Js Code-->
				<label>Name</label>
				<input type="text" id="inputName" name="name" value="<?php echo $profile['name'];  ?>" class="form-control setmargin" placeholder="Name please" required autofocus>
				<label>Email</label>
				<input type="email" id="inputEmail" name="email" value="<?php echo $profile['email'];  ?>" class="form-control setmargin" placeholder="Email Please" required>
				<label>Password</label>
				<input type="password" id="inputName" name="pass" value="<?php echo $profile['pass'];  ?>" class="form-control setmargin" placeholder="Password please" required autofocus>
				<label>Mobile</label>
				<input type="number" id="inputEmail" name="mobile" value="<?php echo $profile['mobile'];  ?>"  class="form-control setmargin" placeholder="Contact Please" required>
				<label>City</label>
				<input type="text" id="inputName" name="city" value="<?php echo $profile['city'];  ?>"  class="form-control setmargin" placeholder="City please" required autofocus>
				<label>Address</label>
				<textarea class="form-control setmargin" rows="5" name="address"  id="comment"><?php echo $profile['address'];  ?></textarea>
			
			
				<input class="btn btn-lg btn-primary btn-block setmargin" name="done" type="submit" value="Update"/>
				
			  </form>
				
				
				</div>
				</div><!--End of Row-->
				
				
				
				
				
				</div><!--ENd of Main Row-->
				
				</section>
				<!-- End oF  Main -->
	 <!--Footer-->
	 <?php 
	 
	 include "assets/footer.php";
	 ?>