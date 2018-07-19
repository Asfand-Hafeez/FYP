<?php
include_once "../config.php ";
           $id = $_GET['id'];
$query=$class->delet("DELETE FROM category  WHERE id='$id'");
$class->redirect("category.php");


?>