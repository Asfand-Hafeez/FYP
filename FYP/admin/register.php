<?php

include_once "../config.php ";


if(isset($_POST['done']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];                    
			$gender= $_POST['gender'];
			$password= $_POST['pass'];
			$address= $_POST['address'];
			$city= $_POST['city'];
			$mobile= $_POST['mobile'];
			$role= "user";
			$folder = "../images/";
			$image = $_FILES['image']['name'];
			$path = $folder.$image;
			move_uploaded_file($_FILES['image']['tmp_name'],$path);
			$query=$class->insert("INSERT INTO users  ( name, img,email, pass, gender, mobile,city,address,role) VALUES ('$name','$image','$email','$password','$gender', '$mobile','$city','$address','$role')");
				if($query){
					
			$class->redirect("login.php");
				}
				else{
					
					echo "Error";
				}
		}
		

?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>Admin Area| Account Register</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mystyle.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
 	 
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

  </div>
</nav>
     <!--End of Top Bar-->
	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row">
	
	<div class="col-sm-12 ">
	<h1 class="text-center">Admin Area<small>Account Registration</small></h1>
	</div>
	
	
	</div>
	 </div>
	 </header>
	 <!-- End Of header-->
	 
	


				<!-- Main -->
	 
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-6 col-sm-offset-3  col-sm-offset-4">
				<form class="form-signin well" method="post" enctype="multipart/form-data">
				<h2 class="form-signin-heading text-center">Please Sign Up</h2>
				<!--image by Javascript-->
				<center>
							<div class="image-upload">
    <label for="file-input">
        <img src="images/user.jpg" onchange="showImage.call(this)" style="width:250px;height:250px;" id="image"/>
    </label>

    <input name="image" id="file-input" id="image"  onchange="showImage.call(this)" type="file"/>
</div>

						
				 </center>
				<!--End Of Js Code-->
				<label>Name</label>
				<input type="text" name="name" id="inputName" class="form-control setmargin" placeholder="Name please" required autofocus>
				<label>Email</label>
				<input type="text" name="email" id="inputEmail" class="form-control setmargin" placeholder="Email Please" required>
				<label>Password</label>
				<input type="password" name="pass" id="inputName" class="form-control setmargin" placeholder="Password please" required autofocus>
				<label>Mobile</label>
				<input type="number" name="mobile" id="inputEmail" class="form-control setmargin" placeholder="Contact Please" required>
				<label>City</label>
				<input type="text" name="city" id="inputName" class="form-control setmargin" placeholder="City please" required autofocus>
				<label>Address</label>
				<textarea class="form-control setmargin" name="address" rows="5" id="comment"></textarea>
			
				  <label class="checkbox-inline">
				  <input type="checkbox" value="male" name="gender">Male
				</label>
				<label class="checkbox-inline">
				  <input type="checkbox" value="female" name="gender">Female
				</label>
				
				<input class="btn btn-lg btn-primary btn-block setmargin" type="submit" name="done" value="Sign in"/>
				<p class="text-center register removemargin">
				Alreadr have an Account!!<a href="login.php" type="button" class="btn  btn-link">Sign In here</a>
				</p>
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