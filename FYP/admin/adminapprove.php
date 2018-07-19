<?php
include "assets/header.php";
?>

	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1 >   <span class="glyphicon glyphicon-cog"></span>Admin Area <small>Users Management</small></h1>
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
	 
	 
				<section id="main" style="min-height:350px;">
				<div class="container">
				<div class="row">
				<div class="col-sm-12"> 
			
				
				<!--Users--->
			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading main-color-bg">Online Users</div>
				<div class="panel-body scrollable-panel">
			  <!-- Table -->
			  <table class="table">
			  <thead class="thead-dark">
				<tr>
				 
				  <th scope="col">Name</th>
				  <th scope="col">Email</th>
				  <th scope="col">Status</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
			  $userdetail= $class->fetchdata("select * from users where status = 1 and email!='asfand@gmail.com'");
			  	while($detail=$userdetail->fetch(PDO::FETCH_ASSOC))
				{
				extract($detail);
			  ?>
			  
				<tr>
				 
				  <td style="text-transform:capitalize;"><?php echo $name;?></td>
				  <td><?php echo $email;?></td>
				  <td><span class="btn btn-success ">Online</span> </td>
				</tr>
				<?php
				}
				?>
			
			  </tbody>
			</table>
			</div>
			</div>
							
							
				<!---ENd OF Users--->
				
				
				</div><!--End of col 1-->
				
				
				
				
				
				</div><!--ENd of Main Row-->
				</div>
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