<?php 
include "assets/header.php";

if(isset($_POST['done']))
		{	
			$name= $_POST['name'];
			$email= $_POST['email'];
			$message = $_POST['message'];			
			
			$query=$class->insert("INSERT INTO contact  (  name,email,message) VALUES ('$name','$email','$message')");
				if($query){
					
			$class->redirect("index.php");
				}
				else{
					
					echo "Error";
				}
		}

?>

	<style >
	h1{color:#336699}
	.a{color:#666666}
	.b{color:#f20d0d}
	h1 {
    text-shadow:  1px 1px  #808080;
	}
	
	
	
</style>
	<!-- content area-->
		<div class="container" style="margin-top:15px;">
	<div class="row" >

<div class="col-md-10 col-md-offset-1">
<!--start Of Row--->
 

<div class="row">

<div class="col-sm-12">

	<div class="col-md-12">
	
	<h1 >Contact Us</h1>
	<p style="padding-bottom:25px;" class="a">
	<b>You Can Ask Any Question that comes in your mind According to this Website.
	Any Voilence Adds
	</b>
	</p>
	
     
    </div>
<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control" id="inputPassword4" name="email" placeholder="Email">
    </div>
  </div>
  
  <div class="form-group col-md-12">
    <label for="inputAddress2">Message</label>
     <textarea class="form-control" name="message" rows="5" id="comment" style="resize:none"></textarea>
  </div>
  
   <div class="form-group col-md-3 pull-right">
      <input  type="submit" class="btn btn-primary" name="done" style="width:200px; " value="Submit">
  </div>
    
 
  

</form>


</div>


</div>
<!--End of Column2--->
</div><!--ENd OF ROw--->

</div>
	</div>
	
	
	<!-- ENd of content area-->
	
	<!--Footer-->
<?php 
include "assets/footer.php";
?>