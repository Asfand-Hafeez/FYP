<?php
session_start();
include_once "../config.php";
if($class->is_loggedin()!="")
{
	$class->redirect('index.php');
}
if(isset($_POST['done']))
{
$email= $_POST['email'];
$password= $_POST['pass'];


if($class->doLogin($email,$password))
	{		
	$class->redirect("index.php");	
	}
	else
	{
		$error = "Wrong Details !";
	}
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>Admin Area| Account login</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mystyle.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
 	 
</head>
<body>
<!-- top bar-->
<nav class="navbar navbar-default ">
  <div class="container  ">
    <div class="navbar-header">
	
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
	<h1 class="text-center">Admin Area<small>Account Login</small></h1>
	</div>
	
	
	</div>
	 </div>
	 </header>
	 <!-- End Of header-->
	 
	


				<!-- Main -->
	 
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
				
				<form class="form-signin well" method="post">
				<h2 class="form-signin-heading text-center">Please sign in</h2>
				<label>Email address</label>
				<input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
				<label>Password</label>
				<input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
				<div class="checkbox text-center">
				 
				  <a href="forgotpass.php"  type="button" class="btn  btn-link"> Forgot Password</a>
				</div>
				
				<input class="btn btn-lg btn-primary btn-block" type="submit" name="done" value="Sign in"/>
				<p class="text-center register">
				Dont have an Account!! <a href="register.php"  type="button" class="btn  btn-link"> Register here</a>
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