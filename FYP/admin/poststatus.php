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

		
$id=$_GET['id'];
$status=$_GET['status'];
$from=$_GET['from'];

$query=$class->update("UPDATE `post` SET `status`='$status' WHERE `id`='$id'");
if($from=="mypost")
{
$class->redirect("mypost.php");	
}else if($status=="active")
{
$class->redirect("userpendingpost.php");
}else if($status=="Pending")
{
$class->redirect("userpost.php");	
}else{
$class->redirect("mypost.php");
}
?>