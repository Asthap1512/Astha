



<?php
include("sidebar.php");
include("header.php");
?>


<?php

include("config.php");
if(isset($_POST['submit']))
{
	$service_name=$_POST['service_name'];
	$service_category=$_POST['service_category'];
	$owner_name=$_POST['owner_name'];
	$description=$_POST['description'];
	$logo=trim($_FILES['logo']['name']);
	$city=$_POST['city'];
	$adderss=$_POST['adderss'];
	$contact_no=$_POST['contact_no'];
	$booking_rate=$_POST['booking_rate'];
	$sql="insert into tbl_serviceprovider(service_name,service_category,owner_name,description,logo,city,adderss,contact_no,booking_rate)value('$service_name','$service_category','$owner_name','$description','$logo','$city','$adderss','$contact_no','$booking_rate')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "record inserted";
	
	}
}


?>
<div class="main-grid">
<div class="agile-grids">
<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>serviceprovider Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>serviceprovider Form :</h4>
								</div>
								<div class="form-body">
									<form enctype="multipart/form-data" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">service name </label> 
											<input type="text" name="service_name" class="form-control" id="exampleInputEmail1" placeholder="service name"> 
										</div> 
                                        
										<div class="form-group"> 
											<label for="exampleInputPassword1">service catrgroy</label> 
											<input type="text" name="service_category" class="form-control" id="exampleInputPassword1" placeholder="servicecategory"> 
										</div> 
										
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">owner name</label> 
											<input type="text" name="owner_name" class="form-control" id="exampleInputPassword1" placeholder="owner name"> 
										</div> 
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">description</label> 
											<input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="description"> 
										</div> 
                                        <?php
 if(isset($_FILES['logo']))
 {
	 $file_name=$_FILES['logo']['name'];
	 $file_tmp=$_FILES['logo']['tmp_name'];
	 $file_size=$_FILES['logo']['size'];
     if($_FILES['logo']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'serviceproviderlogo/'.$file_name))
		 { 
			 
		 }}
 }
 ?>
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">logo</label> 
											<input type="file" name="logo" class="form-control" id="exampleInputPassword1" placeholder="logo"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">city</label> 
											<input type="city" name="city" class="form-control" id="exampleInputPassword1" placeholder="city"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">adderss</label> 
											<input type="text" name="adderss" class="form-control" id="exampleInputPassword1" placeholder="adderss"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">contact no</label> 
											<input type="text" name="contact_no" class="form-control" id="exampleInputPassword1" placeholder="city"> 
										</div> 
                                        
										 <div class="form-group"> 
											<label for="exampleInputPassword1">booking rate</label> 
											<input type="text" name="booking_rate" class="form-control" id="exampleInputPassword1" placeholder="booking rate"> 
										</div> 
                                        
                                        
                                         
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="main-grid">
                    <div class="agile-grids">
                    
					<div class="table-heading">
					<h2>Mange service provider </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>service provider</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>service name</th>
<th>service_category</th>
<th>owner_name</th>
<th>description</th>
<th>logo</th>
<th>city</th>
<th>adderss</th>
<th>contact_no</th>
<th>booking_rate</th>


<th>delete</th>
<th>edit</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>

<?php
$sql="select * from tbl_serviceprovider where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	?>
    <tr>
    <td><?php echo $row["service_name"];?></td>
    <td><?php echo $row["service_category"];?></td>
    <td><?php echo $row["owner_name"];?></td>
    <td><?php echo $row["description"];?></td>
    <td><img src="serviceproviderlogo/<?php echo $row["logo"];?>" style="width:50px;height:50px;"></td>
    <td><?php echo $row["city"];?></td>
    <td><?php echo $row["adderss"];?></td>
    <td><?php echo $row["contact_no"];?></td>
    <td><?php echo $row["booking_rate"];?></td>
    <td><a href="serviceprovider.php?service_name=<?php echo $row["service_name"];?>">
<img src="images/delete.jpg"></a>
</td>


<td><a href="editserviceprovider.php?service_name=<?php echo $row["service_name"];?>">
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
	if(isset($_GET['service_name']))
	{
		
		$service_name=$_GET['service_name'];
		$sql="update tbl_serviceprovider set status=1 where service_name='$service_name'";
		
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