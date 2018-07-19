<?php 
include "assets/header.php";
$id = $_GET['id'];
$query=$class->fetchdata("SELECT * FROM post WHERE id='$id'"); 
$detail=$query->fetch(PDO::FETCH_ASSOC);
extract($detail);
$userQuery=$class->fetchdata("SELECT * FROM `users` WHERE id = '$user_id'");
$user_id=$userQuery->fetch(PDO::FETCH_ASSOC);

$Views =$class->insert("update `post` set views=views+1 WHERE id = '$id'");

?>	
	
	<!-- content area-->
	<div class="container" style="margin-top:15px;">
	<div class="row" >

<div class="col-md-10 col-md-offset-1">
<!--start Of Row--->
 
<h2 style="text-transform:capitalize"><?php echo $title ?></h2>
<b><p><?php echo $posted_date;?></p></b>

<div class="row">

<div class="col-sm-9">

<center>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>

  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active">
      <img src="images/<?php echo $img1;?>" alt="Image 1" style="height:300px; width:400px;">
    </div>

    <div class="item">
      <img src="images/<?php echo $img2;?>" alt="Image 2" style="height:300px;; width:400px;">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</center>

<div class="panel panel-primary">
  <div class="panel-heading"><b>Information</b></div>
  <div class="panel-body">
	<p style="text-transform:capitalize"><?php echo $detail; ?></p>
  
  </div>
</div>

</div>
<!--End of Column1--->
<div class="col-sm-3">
<div class="panel panel-primary">
  <div class="panel-heading">
  <b>Price:</b><br/>
  <h3>$<?php echo $price ?></h3>
  </div>
  <div class="panel-body" >
	<b>Name:</b><br/>
	<p style="text-transform:capitalize"><b><?php echo $user_id['name'];?></b></p>
	
	
	
  </div>
  <div class="panel panel-footer" style="margin-bottom:0px;">
  <b>Contact:</b><br/>
	<p><b><?php echo $user_id['mobile'];?></b></p>
</div>
</div>



</div>
<!--End of Column2--->
</div><!--ENd OF ROw--->

</div>
	</div>
	</div>
	
	<!-- ENd of content area-->
	
<?php 
	include "assets/footer.php";
?>