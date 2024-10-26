
<?php
include("sidebar.php");
include("header.php");
?>

<?php
include("config.php");
if(isset($_GET['user_id']))
{
		$user_id=$_GET['user_id'];
		$sql="select * from tbl_user where status=0 and user_id='$user_id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$full_name=$row['full_name'];
	$city=$row['city'];
	$adderss=$row['adderss'];
	$email_id=$row['email_id'];
	$password=$row['password'];
	$id_proof=$row['id_proof'];
	$mo_number=$row['mo_number'];
	$create_date=$row['create_date'];
	$otp=$row['otp'];
}}
?>

<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>user Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>user Form :</h4>
								</div>
								<div class="form-body">
									<form enctype="multipart/form-data" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">full name </label> 
											<input type="text" name="full_name" class="form-control"  value="<?php echo $full_name;?>" id="exampleInputEmail1" placeholder="full name"> 
										</div> 
                                        
										<div class="form-group"> 
											<label for="exampleInputPassword1">city</label> 
											<input type="city" name="city" class="form-control" value="<?php echo $city?>" id="exampleInputPassword1" placeholder="city"> 
										</div> 
										
                                      
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">adderss</label> 
											<input type="text" name="adderss" class="form-control" value="<?php echo $adderss?>" id="exampleInputPassword1" placeholder="adderss"> 
										</div> 
                                                                                <div class="form-group"> 
											<label for="exampleInputPassword1">email id</label> 
											<input type="email" name="email_id" class="form-control" value="<?php echo $email_id?>" id="exampleInputPassword1" placeholder="email id"> 
										</div> 
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">password</label> 
											<input type="text" name="password" class="form-control" value="<?php echo $password?>" id="exampleInputPassword1" placeholder="password"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">id proof</label> 
											<input type="text" name="id_proof" class="form-control" value="<?php echo $id_proof?>" id="exampleInputPassword1" placeholder="id proof"> 
										</div> 
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">mo number</label> 
											<input type="text" name="mo_number" class="form-control" value="<?php echo $mo_number?>" id="exampleInputPassword1" placeholder="mo_number"> 
										</div> 
										
                                        
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">create date</label> 
											<input type="date" name="create_date" class="form-control" value="<?php echo $create_date?>" id="exampleInputPassword1" placeholder="create date"> 
										</div> 
										
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">otp</label> 
											<input type="text" name="otp" class="form-control" value="<?php echo $otp?>" id="exampleInputPassword1" placeholder="otp"> 
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
<td>full name</td>
<td><input type="text" name="full_name" value="<?php echo $full_name;?>"></td>
</tr>

<tr>
<td>city</td>
<td><input type="text" name="city" value="<?php echo $city?>"></td>
</tr>

<tr>
<td>adderss</td>
<td><input type="text" name="adderss" value="<?php echo $adderss?>"></td>
</tr>

<tr>
<td>email id</td>
<td><input type="email" name="email_id"value="<?php echo $email_id?>"></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" name="password" value="<?php echo $password?>"></td>
</tr>


<tr>
<td>id proof</td>
<td><input type="text" name="id_proof" value="<?php echo $id_proof?>"></td>
</tr>



<tr>
<td>mobile</td>
<td><input type="text" name="mo_number" value="<?php echo $mo_number?>"></td>
</tr>



<tr>
<td>create date</td>
<td><input type="date" name="create_date" value="<?php echo $create_date?>"></td>
</tr>

<tr>
<td>otp</td>
<td><input type="text" name="otp" value="<?php echo $otp?>"></td>
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
	$full_name=$_POST['full_name'];
	$city=$_POST['city'];
	$adderss=$_POST['adderss'];
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];
	$id_proof=$_POST['id_proof'];
	$mo_number=$_POST['mo_number'];
	$create_date=$_POST['create_date'];
	$otp=$_POST['otp'];

	$sql="update tbl_user set full_name='$full_name',city='$city',adderss='$adderss',email_id='$email_id',password='$password',id_proof='$id_proof',mo_number='$mo_number',create_date='$create_date',otp='$otp' where status=0 and user_id='$user_id'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('user edited successfully');</script>";
	echo "<script>window.location.href='user.php'</script>";	
	
	
	}
}


?>
<?php
include("footer.php");
?>