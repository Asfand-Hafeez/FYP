<?php 
include "config.php";
include "assets/header.php";

$query=$class->fetchdata("SELECT * FROM post WHERE title like '$search%'"); 

?>	
	
	<!-- content area-->
	<div class="container" style="margin-top:50px; margin-bottom:30px;">
	<div class="row" >

<div class="col-md-10 col-md-offset-1">
<!--start Of Row--->
 
<?php
if($query->rowCount()>0)
{
?>
<div class="row" >

<div class="col-sm-12" >
<?php
while($detail=$query->fetch(PDO::FETCH_ASSOC))
{
extract($detail);
?>
<div class="row" style=" border-style: solid; border-width: 1px; ">
<a href="detail.php?id=<?php echo $id;?>" type="button" style="color:black; text-decoration:none;">
<div class="col-sm-3">
<img src="images/<?php echo $img1;?>" alt="" class="img-responsive logo" style="height:100px; width:100px; " />

</div>
<div class="col-sm-6" style=" padding-top:10px; "><h3><?php echo $title;?></h3></div>
<div class="col-sm-3" style=" padding-top:10px; "><h3><?php echo $price;?></h3></div>
</a>
</div>
<?php
}
?></div>


</div><!--ENd OF ROw--->
<?php
}else{
?>
<div class="col-md-12">
<h1>No data found</h1>

</div>
<?php
}
?>
</div>
	</div>
	</div>
	
	<!-- ENd of content area-->
	
<?php 
	include "assets/footer.php";
?>