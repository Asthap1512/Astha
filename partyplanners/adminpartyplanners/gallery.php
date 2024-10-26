
<?php
include("sidebar.php");
include("header.php");
?>

<?php

include("config.php");
if(isset($_POST['submit']))
{
	$gallery_image=trim($_FILES['gallery_image']['name']);
	
	$sql="insert into tbl_gallery(gallery_image)value('$gallery_image')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "record inserted";
	
	}
}

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
											<label for="exampleInputEmail1">gallery image </label> <?php
 if(isset($_FILES['gallery_image']))
 {
	 $file_name=$_FILES['gallery_image']['name'];
	 $file_tmp=$_FILES['gallery_image']['tmp_name'];
	 $file_size=$_FILES['gallery_image']['size'];
     if($_FILES['gallery_image']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'galleryimage/'.$file_name))
		 { 
			 
		 }}
 }
 ?>


											<input type="file" name="gallery_image" class="form-control" id="exampleInputEmail1" placeholder="gallery name"> 
										</div> 
                                
										
                                        
                                         
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
					
<div class="table-heading">
					<h2>Mange gallery </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>gallery</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>gallery_image</th>

<th>delete</th>
<th>edit</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
<?php
$sql="select * from tbl_gallery where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
    
    <td><img src="galleryimage/<?php echo $row['gallery_image'];?>" style="width:50px;height:50px;"></td>
    
    
    
    <td><a href="gallery.php?gallery_id=<?php echo $row["gallery_id"];?>">
<img src="images/delete.jpg"></a>
</td>


<td><a href="editgallery.php?gallery_id=<?php echo $row["gallery_id"];?>">
<img src="images/edit.jpg"></a>
</td>
    </tr>
    <?php
}
?>

						  </tr>
						 
						</tbody>
					  </table>
					</div>


  <?php
	if(isset($_GET['gallery_id']))
	{
		
		$gallery_id=$_GET['gallery_id'];
		$sql="update tbl_gallery set status=1 where gallery_id='$gallery_id'";
		
	$result=mysqli_query($con,$sql);
	 if($result)
	 {
		 
	echo "record delete";	 
		 
		 
	 }
	 
}
?>
	<?php
include("footer.php");
?>