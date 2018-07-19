<?php
include "assets/header.php";
 $id = $_GET['id'];
		$query= $class->fetchdata("SELECT * FROM `post` where id='$id'");
		
		$detail=$query->fetch(PDO::FETCH_ASSOC);
		$query1= $class->fetchdata("SELECT * FROM users where id='$detail[user_id]'");
		$user=$query1->fetch(PDO::FETCH_ASSOC);
		?>
	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1 >   <span class="glyphicon glyphicon-cog"></span>Admin Area  <small>Post Information</small></h1>
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
	 <li class="active"> Detail </li>
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
				
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
				
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="../images/<?php echo $detail['img1'];?>" alt="<?php echo $detail['title'];?>" style="height:400px;">
					</div>

					<div class="item">
					  <img src="../images/<?php echo $detail['img2'];?>" alt="<?php echo $detail['title'];?>" style="height:400px;">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
								 
				 </center>
				<!--End Of Js Code-->
				<div class="table-responsive thumbnail">
				<table class="table">
				<thead>
				<b>
				<p><h3 class="text-center">Your Information</h3></p>
				</b>
				<p>
				<h4>Post Date:</h4>
				<p><?php echo $detail['posted_date'];?></p>
				</p>
				<p>
				<h4>Post By:</h4>
				<p><?php echo $user['name'];?></p>
				</p>
				<p >
				<h4>Price</h4>
				<p><?php echo $detail['price'];?></p>
				</p>
				<p class="margin_for_comment">
				<h4>Detail</h4>
				<p> 
				<table class="table table-bordered myclass">
				<tr>
				<td>
				<?php echo $detail['detail'];?>
				
				</td>
				
				</tr>
				</table>
				</p>
				</p>
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