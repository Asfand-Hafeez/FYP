<?php

session_start();
include "../config.php";
if(empty($_SESSION['id']))
		{
			 ?>
			 <script> window.location.href="login.php";</script>
			 <?php 
		}else{
			$ok = $_SESSION['id'];
		}

		$query= $class->fetchdata(" select * from users where id='$ok'");
		$data=$query->fetch(PDO::FETCH_ASSOC);
		
		?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mystyle.css" />
	<link rel="stylesheet" href="css/awesome.min.css">
	  <script type="text/javascript">
	 
	 function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
	 
	 </script>
<script language="javascript">
    function showImage() {
		if(this.files && this.files[0]){
			
			var obj = new FileReader();
			obj.onload=function(data){
				
				var image = document.getElementById("image");
				image.src=data.target.result;
				image.style.display="block";
			}
				obj.readAsDataURL(this.files[0]);
		}
        
    }
	
	 function howImage() {
		if(this.files && this.files[0]){
			
			var obj = new FileReader();
			obj.onload=function(data){
				
				var image = document.getElementById("image2");
				image.src=data.target.result;
				image.style.display="block";
			}
			obj.readAsDataURL(this.files[0]);
		}
        
    }
	
</script>
<style>
.image-upload > input
{
    display: none;
}
</style>
 	 
</head>
<body>
<!-- top bar-->
<nav class="navbar navbar-default ">
  <div class="container  ">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	<a href="../index.php" class="navbar-brand">AmindStrap</a>  
	</div><!--End of navbar header-->
     <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
	
		<li class="active act"><a href="index.php">DashBoard</a></li>
		
				<?php
					if($data['role']=="admin")
					{
					?>
							<li><a href="Category.php">AddCategory</a></li>
							<li><a href="users.php">User</a></li>	
							<li><a href="mypost.php">Post</a></li>
					<?php
					}else {
						
					?>
		<li><a href="active.php">Post</a></li>
					<?php } ?>
	</ul>
	<!--End of left Navbar-->

<ul class="nav navbar-nav  navbar-right">
		<li ><a href="profile.php" style="text-transform:capitalize;">Welcome,<?php echo $data['name'];?></a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log-out</a></li>
	 	
	</ul>
<!--End of Right Navbar-->
	
	</div><!--End of Collapse-->
  </div>
</nav>
     <!--End of Top Bar-->
	