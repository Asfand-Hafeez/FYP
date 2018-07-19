<?php
//error_reporting(0);
//include "config.php";
include "sliderAssets/sliderHeader.php";
include "assets/header.php";


$cat = $_GET['cat'];


$category= $class->fetchdata("SELECT * FROM `category` order by title asc");
if(empty($cat))
{	
$post= $class->fetchdata("select * from post where status ='Active' order by id desc");
}else{
$post= $class->fetchdata("select * from post where category = '$cat' and status ='Active' order by id desc");	
}



?>
	
	<!--slider-->
	
		<div class="container-fluid">
<div class="row">	
	</div><!--End OF Row-->
	</div>

	<!--End of SLider-->
	
	<!--Latest POst-->
		<div class="container-fluid">
	<div class="row">
<div class="col-sm-3">
<div class="list-group">
  <i class="list-group-item active main-color-bg">
    Catogories
  </i>
  	<?php
		while($categoryData=$category->fetch(PDO::FETCH_ASSOC))
		{
			extract($categoryData);
			  ?>
			    <a href="index.php?cat=<?php echo $id;?>" class="list-group-item"><?php echo $title;?></a>
		<?php
		}
		?>
</div>

</div>
<div class="col-sm-9">
<!--start Of Row--->
<div class="row">
<?php 

 

while($userpost=$post->fetch(PDO::FETCH_ASSOC))
		{
			extract($userpost);
?>

<div class="col-sm-3 thumbnail">
<img src="images/<?php echo $img1;?>" alt="" style="width:300px;height:200px;" class="img-responsive" />
<p class="text-center"> 
<?php echo $title;?>
</p>
<center>
<p>
<a href="detail.php?id=<?php echo $userpost['id'];?>" type="button" class="btn btn-danger">Detail</a>
</p>
</center>
</div><!--ENd of column-->


	<?php 
} 
?>

</div><!--ENd OF ROw--->






</div>
	</div>
	</div>
	
	<div class="container">
	<div class="last-products">
				<h2>Feature Post</h2>
				<section class="products">
<?php
$post= $class->fetchdata("select * from post  where status ='Active' order by views desc");
while($Fpost=$post->fetch(PDO::FETCH_ASSOC))
		{
			extract($Fpost);
?>
					<article>
						<img src="images/<?php echo $img1;?>" style="width:250px;height:200px;" alt="" class="img-responsive">
						<h3><?php echo $title;?></h3>
						<h4>$<?php echo $price;?></h4>
						<a href="detail.php?id=<?php echo $Fpost['id'];?>" class="btn btn-danger">Detail</a>
					</article>
		<?php
		}
		
		?>
				</section>
			</div>
			
	</div>
	<!--ENd of Latest post-->
<?php 
	include "assets/footer.php";
	include "sliderAssets/sliderFooter.php";
	
?>
</body>
</html>