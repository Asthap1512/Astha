
<?php
include("sidebar.php");
include("header.php");
?>
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

	$sql="insert into tbl_user(full_name,city,adderss,email_id,password,id_proof,mo_number,create_date,otp)value('$full_name','$city','$adderss','$email_id','$password','$id_proof','$mo_number','$create_date','$otp')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "record inserted";
	
	}
}


?>


<div class="table-heading">
					<h2>Mange user </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>user</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>full_name</th>
<th>city</th>
<th>adderss</th>
<th>email_id</th>
<th>password</th>
<th>id_proof</th>
<th>mo_number</th>
<th>create_date</th>
<th>otp</td>

<th>delete</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
$sql="select * from tbl_user where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["full_name"];?></td>
<td><?php echo $row["city"];?></td>
<td><?php echo $row["adderss"];?></td>
<td><?php echo $row["email_id"];?></td>
<td><?php echo $row["password"];?></td>
<td><?php echo $row["id_proof"];?></td>
<td><?php echo $row["mo_number"];?></td>
<td><?php echo $row["create_date"];?></td>
<td><?php echo $row["otp"];?></td>
<td><a href="user.php?user_id=<?php echo $row["user_id"];?>">
<img src="images/delete.jpg"></a>
</td>


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
if(isset($_GET['user_id']))
{
		$user_id=$_GET['user_id'];
		$sql="update tbl_user set status=1 where user_id='$user_id'";
		
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