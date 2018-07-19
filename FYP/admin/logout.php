<?php
session_start();
include_once "../config.php";
$ok = $_SESSION['id'];
$class->update("UPDATE `users` SET `status`= '0' WHERE id = '$ok'");
if($class->doLogout())
{
	$class->redirect("login.php");
}
?>