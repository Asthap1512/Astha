
<?php
include("sidebar.php");
include("header.php");
?>


<?php
include("config.php");
	if(isset($_GET['gallery_id']))
	{
		
		$gallery_id=$_GET['gallery_id'];
		$sql="select * from tbl_gallery where status=0 and gallery_id='$gallery_id' ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$gallery_image=$row['gallery_image'];
}}
?>

<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>gallery Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>gallery Form :</h4>
								</div>
								<div class="form-body">
									<form enctype="multipart/form-data" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">gallery image </label> <img src="galleryimage/<?php echo $gallery_image; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br /><input type="file" name="gallery_image" id="gallery_image" style="float:left;" />
<input type="hidden" name="gallery_image" id="gallery_image"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $gallery_image;} ?>"/>
										</div> 
                                
										
                                        
                                         
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
			


<?php

include("config.php");
if(isset($_POST['submit']))
{
	if(isset($_FILES['gallery_image']))
           {
	
$gallery_image = trim($_FILES['gallery_image']['name']);

	
	if($_FILES["gallery_image"]["name"] == ''){
		 $gallery_image = $_POST['gallery_image'];
	}
	else{
		 $gallery_image = $_FILES['gallery_image']['name'];
	}

 
 move_uploaded_file($_FILES['gallery_image']['tmp_name'], "galleryimage/".$_FILES['gallery_image']['name']);

	
	$sql="update tbl_gallery set gallery_image='$gallery_image' ";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('gallery edited successfully');</script>";
	echo "<script>window.location.href='gallery.php'</script>";
	
	}
}}

?>
<?php
include("footer.php");
?>