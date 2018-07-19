<?php

require "assets/header.php";

       $id = $_GET['id'];
$query=$class->fetchdata("SELECT * FROM category WHERE id='$id'");
$data=$query->fetch(PDO::FETCH_ASSOC);




if(isset($_POST['done']))
		{	
			$title= $_POST['title'];
		                  
			
			$query=$class->update("UPDATE category SET title='$title' where id ='$id'" );
			$class->redirect("category.php");
	
		}		
?>

     <!--End of Top Bar-->
	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1><span class="glyphicon glyphicon-cog"></span>Admin Area <small>Update Category</small></h1>
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

	
		<!-- End of  Breadcrum-->


				<!-- Main -->
	 
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-6 col-sm-offset-3  col-sm-offset-4">
				<form class="form-signin well" method="post" enctype="multipart/form-data">
				<h2 class="form-signin-heading text-center">Update Category</h2>
				
				<label>Update Category</label>
				<input type="text" name="title" value="<?php echo $data['title']; ?>" id="inputName" class="form-control setmargin" placeholder="Add category" required autofocus>
				<input class="btn btn-lg btn-primary btn-block setmargin" name="done" type="submit" value="Update"/>
				
			  </form>
			
			
			

				
				</div>
				</div><!--End of Row-->
				
				
				
				
				
				</div><!--ENd of Main Row-->
				
				</section>
				<!-- End oF  Main -->
	 <!--Footer-->
	 <footer id="footer">
		<div class="container-fluid copyright">
	<div class="container">
	
	<div class="row">
	<div class="col-sm-5 col-xs-7">
	<b>
	
	&copy; Copy Right @2018
	</b>
	</div>
	
	<div class="col-sm-7 col-xs-5">
	<p class="text-right">
	<b>
	Designed By AH..</p>
	</b>
	</div>
	
	</div>
	
	</div>
	
	
	</div>
	<!--End of Copy Rights-->
	 
	 </footer>
	 
	 <!--End Of footer-->
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


</body>
</html>