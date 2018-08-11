<?php
ob_start();
error_reporting(0);
session_start();

$search = $_GET['search'];
if(empty($search))
{
	$search = "";
}

include "config.php";


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width">
	<title>KatcheryBazar.pk</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/mystyle.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/bootstrap-social@5.1.1/bootstrap-social.css" type="text/css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/bootstrap-social@5.1.1/bootstrap-social.less" type="text/css" />
	<style>
	.mylink{color:white;
		text-decoration:none;
	
	}
	.mylink:hover{color:white;
		text-decoration:none;
	
	}
	
	</style>
 	
 	 
</head>
<body>
	<!-- header-->
	
	<div class="container-fluid top-bar " >
	<div class="container">
	<div class="row">
	<div class="col-sm-3  icon-size">
	<a href="#" data-toggle="tooltip"  data-placement="bottom" title="Facebook" class="social-icons"><i class="fa fa-facebook"></i></a>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter" class="social-icons"><i class="fa fa-twitter" ></i></a>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube" class="social-icons"><i class="fa fa-youtube-play"></i></a>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+" class="social-icons"><i class="fa fa-google-plus"></i></a>
	</div>
	<div class="col-sm-9  text-right contact-info icon-size">
	<?php
	if(empty($_SESSION['id']))
		{
			 ?>
	<a href="admin/login.php" class="btn btn-warning"><span class="glyphicon glyphicon-log-in"></span> Login</a>
	<a href="admin/register.php" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> Register</a>

			 <?php 
		}else{
?>
<ul class="nav navbar-nav  navbar-right">
		<a href="admin/profile.php" class="mylink" style="text-transform:capitalize;"><?php echo 	$ok = $_SESSION['name'];?></a>
</ul>
		<?php	
	
			
	}
	?>



	</div>
	</div><!--End of Row-->
	</div><!--End of container-->
	</div>	<!--End of container-fluid-->
	<!-- logos and navigation-->
	
	<div class="container">
	<div class="row">
	<div class="col-sm-5 col-xs-4 ">
	<a href="index.php">	
	<img src="images/logo1.png" alt="" class="img-responsive logo" style="height:100px; width:300px; margin-top:5px;" />
	</a>
	</div><!-- End Of First column-->
	<div class="col-sm-7 col-xs-8 my-menu">
	
	<nav class=" navbar navbar-default">
	
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
	</div><!--End of navbar header-->
	
	 <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav pull-right">
		
		<li>
		<form class="navbar-form navbar-left" action="search.php" method="GET">
      <div class="form-group">
        <input type="text" name="search" value="<?php echo  $search?>" class="form-control" placeholder="Search">
      </div>
    </form>
	</li>	
		<li class="active"><a href="index.php">Home</a></li>
		<li><a href="contact.php">Contact Us</a></li>
		
	</ul>
	</div><!--End of Collapse-->
	</nav>
	</div><!-- End Of second column-->
	</div><!--End of row-->
	</div><!--End of container-->
	
	<!-- End of logos and navigation-->
	
	<!--End of header-->
