<?php

    $host = "localhost";
	$db_name = "id6672538_fyp";
    $username = "id6672538_root";
    $password = "bakwasnakar123@";

	try	{
		
		$DB_con= new PDO ("mysql:host={$host};dbname={$db_name}",$username,$password);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		//echo "Connected";
	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
	}
	require_once "classcrud.php";
	$class= new crud($DB_con);
	
?>