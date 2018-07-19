
<?php

require "assets/header.php";

if(isset($_POST['done']))
		{	
			$title= $_POST['title'];
			
			$query=$class->insert("INSERT INTO category  ( title) VALUES ('$title')");
				if($query){
					
			$class->redirect("index.php");
				}
				else{
					
					echo "Error";
				}
		}
$category= $class->fetchdata("select * from category ");

		
?>
     <!--End of Top Bar-->
	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1><span class="glyphicon glyphicon-cog"></span>Admin Area <small>Add Category</small></h1>
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
				<h2 class="form-signin-heading text-center">Add Category</h2>
				
				<label>Add Category</label>
				<input type="text" name="title" id="inputName" class="form-control setmargin" placeholder="Add category" required autofocus>
				<input class="btn btn-lg btn-primary btn-block setmargin" name="done" type="submit" value="Submit"/>
				
			  </form>
			
								<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading main-color-bg">Update Category</div>
				<div  class="panel-body ">
			  <!-- Table -->
			  <table class="table">
			  <thead class="thead-dark">
				<tr>
				 <th scope="col">Title</th>
				  
				</tr>
			  </thead>
			  <tbody>
					  <?php
	
		while($usersData=$category->fetch(PDO::FETCH_ASSOC))
		{
			extract($usersData);
			?>
				<tr>
				   
				  <td><?php echo $title; ?></td>
				
				  <td><a href="editcategory.php?id=<?php echo $usersData['id'];?>" type="button " class="btn btn-warning " >Edit</a><a href="deletcategory.php?id=<?php echo $usersData['id'];?>" type="button " class="btn btn-danger butonspace">Delete</a></td>
				</tr>
		<?php }
		?>
			
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