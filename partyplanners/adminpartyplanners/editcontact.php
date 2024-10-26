
<?php
include("sidebar.php");
include("header.php");
?>

 <?php
 include("config.php");
	if(isset($_GET['contact_id']))
	{
		
		$contact_id=$_GET['contact_id'];
		$sql="select * from tbl_contact where status=0 and contact_id='$contact_id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	 $name=$row['name'];
	$contact_no=$row['contact_no'];
	$email_id=$row['email_id'];
	$massage=$row['massage'];
	
}}
?>

<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Contact Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>Contact Form :</h4>
								</div>
								<div class="form-body">
									<form enctype="multipart/form-data" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">Name </label> 
											<input type="text" name="name" class="form-control" value="<?php echo $name;?>" id="exampleInputEmail1" placeholder="Name"> 
										</div> 
                                        
										<div class="form-group"> 
											<label for="exampleInputPassword1">Contact No</label> 
											<input type="text" name="contact_no" class="form-control" value="<?php echo $contact_no;?>" id="exampleInputPassword1" placeholder="Contact No."> 
										</div> 
										
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">email id</label> 
											<input type="email" name="email_id" class="form-control" value="<?php echo $email_id;?>" id="exampleInputPassword1" placeholder="Email"> 
										</div> 
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">Message</label> 
											<input type="text" name="massage" class="form-control" value="<?php echo $massage;?>" id="exampleInputPassword1" placeholder="massage"> 
										</div> 
                                        
										
                                        
                                         
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
					


		
<html>
<form method="POST" enctype="multipart/form-data">
<table border="1">

<tr>
<td>name</td>
<td><input type="text" name="name"value="<?php echo $name;?>"></td>
</tr>

<tr>
<td>contact no</td>
<td><input type="text" name="contact_no" value="<?php echo $contact_no;?>"></td>
</tr>

<tr>
<td>email id</td>
<td><input type="email_id" name="email_id" value="<?php echo $email_id;?>"></td>
</tr>

<tr>
<td>massage</td>
<td><input type="text" name="massage"value="<?php echo $massage;?>"></td>
</tr>

<tr>
<td>submit</td>
<td><input type="submit" name="submit" value="edit"></td>
</tr>
</table></form></html>

 <?php

include("config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$contact_no=$_POST['contact_no'];
	$email_id=$_POST['email_id'];
	$massage=$_POST['massage'];
	$sql="update tbl_contact set name='$name',contact_no='$contact_no',email_id='$email_id',massage='$massage' where status=0 and contact_id='$contact_id'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('contact edited successfully');</script>";
	echo "<script>window.location.href='contact.php'</script>";	
	
	}
}

?>
<?php
include("footer.php");
?>