<style>
textarea{	
	resize:none;
}
</style>
<?php
			
require "assets/header.php";
if(isset($_POST['done']))
		{	
			$title= $_POST['title'];
			$price= $_POST['price'];
if($data['role']=='admin')
{
$status = "Active";	
} else{
	
	$status = "Pending";
}
	date_default_timezone_set("Asia/Karachi"); //Your timezone
			$created_date = date("d-M-Y h:i:sa");			
			$mobile= $_POST['mobile'];
			$city= "Faisalabad";
			$detail= $_POST['detail'];
			$folder1 = "../images/";
			$folder2 = "../images/";
			$image1 = $_FILES['image1']['name'];
			$path1 = $folder1.$image1;
			move_uploaded_file($_FILES['image1']['tmp_name'],$path1);
			$image2 = $_FILES['image2']['name'];
			$path2= $folder2.$image2;
			move_uploaded_file($_FILES['image2']['tmp_name'],$path2);
			$category = $_POST['category'];
			
			$query=$class->insert("INSERT INTO post  ( status,title, img1,img2 ,price, mobile, city, detail,user_id,category) VALUES ('$status','$title','$image1','$image2','$price','$mobile','$city', '$detail','$ok','$category')");
				if($query){
					
			$class->redirect("index.php");
				}
				else{
					
					echo "Error";
				}
		}
		
?>
<script language="javascript">
    function showImage() {
		if(this.files && this.files[0]){
			
			var obj = new FileReader();
			obj.onload=function(data){
				
				var image = document.getElementById("image");
				image.src=data.target.result;
				image.style.display="block";
			}
			obj.readAsDataURL(this.files[0]);
		}
        
    }
	
	 function howImage() {
		if(this.files && this.files[0]){
			
			var obj = new FileReader();
			obj.onload=function(data){
				
				var image = document.getElementById("image2");
				image.src=data.target.result;
				image.style.display="block";
			}
			obj.readAsDataURL(this.files[0]);
		}
        
    }
	
</script>
<style>
.image-upload > input
{
    display: none;
}
</style>
     <!--End of Top Bar-->
	 <!--header-->
	 <header id="header">
	 <div class="container">
	<div class="row hidden-xs">
	
	<div class="col-sm-10 ">
	<h1><span class="glyphicon glyphicon-cog"></span>Admin Area <small>Creat New Post</small></h1>
	</div>
	
	<div class="col-sm-2">
				
			<div class="dropdown creat">
			  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Create Content
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			<li><a href="addpost.php">Add Post</a></li>
				
				<?php
					if($data['role']=="admin")
					{
					?>
					<li><a href="category.php">Add Categories</a></li>
					<li><a href="users.php">User</a></li>
					<li><a href="mypost.php">Details</a></li>
					<?php
					} else {
					?>
				<li><a href="active.php">Details</a></li>
				
				<?php
					}
				?>
			  </ul>
			</div>
	</div>
	</div>
	 </div>
	 </header>
	 <!-- End Of header-->
	 
		<!--  Breadcrum-->

	
		<!-- End of  Breadcrum-->


				<!-- Main -->
	 
	 
				<section id="main">
				<div class="container">
				<div class="row">
				<div class="col-sm-6 col-sm-offset-3  col-sm-offset-4">
				<form class="form-signin well" method="post" enctype="multipart/form-data">
				<h2 class="form-signin-heading text-center">Add Post here</h2>
				<!--image by Javascript-->
				<div class="row"> 
				<div class="col-sm-6">
                <div class="image-upload">
					<label for="file-input">
					<img src="images/down.jpg" class="img-responsive img-thumbnail" onchange="showImage.call(this)" style="min-width:240px;max-width:200px;max-height:200px;" id="image"/>
					</label>
					<input id="file-input" id="image"  onchange="showImage.call(this)" type="file" name="image1"/>
				</div>    
               
				</div><!--End OF Column-->
				
				<div class="col-sm-6">
				
               <div class="image-upload">
					<label for="file-input2">
					<img src="images/down.jpg" class="img-responsive img-thumbnail" onchange="howImage.call(this)" style="min-width:240px;max-width:200px;max-height:200px;" id="image2"/>
					</label>
					<input id="file-input2" id="image2"  onchange="howImage.call(this)" type="file" name="image2"/>
		    
                 </div>
				</div><!--End OF Column-->
				
				</div>
				<!--End Of Js Code-->
				<label>Title</label>
				<input type="title" name="title" id="inputName" class="form-control setmargin" placeholder="Title" required autofocus>
				<label>Price</label>
				<input type="number" name="price" id="inputEmail" class="form-control setmargin" placeholder="Price" required>
				<label>Mobile</label>
				<input type="number" name="mobile" id="inputEmail" class="form-control setmargin" placeholder="Contact Please" required>
				<label>Category</label>
				<select name="category" required class="form-control">
				<option value="">Choose Category</option>
				<?php
				$category= $class->fetchdata("SELECT * FROM `category` ORDER BY title asc");
				while($categoryData=$category->fetch(PDO::FETCH_ASSOC))
				{
				?>
				<option value="<?php echo $categoryData['id'];?>"><?php echo $categoryData['title'];?></option>
				<?php
				}
				?>
				</select>

				<label>Enter Product Detail</label>
				<textarea class="form-control setmargin" rows="5" name="detail" id="comment" placeholder="..	"></textarea>
				<input class="btn btn-lg btn-primary btn-block setmargin" name="done" type="submit" value="Submit"/>
				
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