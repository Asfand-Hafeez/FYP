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

if($class->update("UPDATE `users` SET `role`='$status' WHERE `id`='$id'"))
{
$class->redirect("index.php#location");
}
?>