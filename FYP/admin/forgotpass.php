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
$category= $class->fetchdata("SELECT * FROM `users` WHERE email = '$email'");
$usersData=$category->fetch(PDO::FETCH_ASSOC);
if($usersData['email']==$email)
{
//
$to = $usersData['email'];
$subject = "Your Password Reset at KatcheryBazar.pk";

$message = "<!DOCTYPE html>
<html lang='en'>
<head>
 
  <title>Bootstrap Theme Simply Me</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #474e5d;
  }
    .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 10px;
      padding-bottom: 10px;
  }

  </style>
</head>
<body>
<div class='container-fluid bg-3 text-center'>
<h1 class='margin'><center>Katchery Bazar</center></h1>
</div>
<!-- First Container -->
<div class='container-fluid bg-1 text-center'>
<h3 class='margin'><center>Hi, ".$usersData['name']."</center></h3>
  <h3 class='margin'><center>Your Password is  :".$usersData['pass']."</center></h3> 
</div>



<!-- Footer -->
<footer class='container-fluid bg-4 text-center'>
  <p><center>Thanks for flying with  KatcheryBazar.pk </center></p> 
</footer>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@katcherybazar.com>' . "\r\n";
$headers .= 'Cc: noreply@katcherybazar.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
<script>alert("Check Your Mail");</script>
<?php
//
}else{
	echo "Email not found in our database";
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
	 
	 
				<section id="main" style="min-height:500px;">
				<div class="container">
				<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
				
				<form class="form-signin well" method="post">
				<h2 class="form-signin-heading text-center">Forgot Password</h2>
				<label>Email address</label>
				<input type="email"  name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			
				
				<input class="btn btn-lg btn-primary btn-block" type="submit" name="done" value="Send Link"/>
				<p class="text-center register">
				 <a href="login.php"  type="button" class="btn  btn-link"> Login here</a>
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