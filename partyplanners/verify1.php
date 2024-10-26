<?php
include("header.php");
?>


<?php
include("config.php");



if(isset($_POST['submit']))
{
	$mo_number=$_GET['mo_number'];
	
$user_otp=$_POST['otp'];
$sql="SELECT `otp` FROM `tbl_user` WHERE `mo_number`=$mo_number";


list($otp)=mysqli_fetch_array(mysqli_query($con,$sql));
if($otp==$user_otp)
{
	$sql2="UPDATE `tbl_user` SET `status`=0 WHERE `mo_number`=$mo_number";
	
	$result2=mysqli_query($con,$sql2);
	
	
	
	$sql3="UPDATE `tbl_login` SET `status`=0 WHERE status=1";
	
	$result3=mysqli_query($con,$sql3);
	
	
	
	
	if(mysqli_affected_rows($con)>0)
	{
		
		echo "<script>alert('your account created successfully..you can now login to your acocount..');</script>";
		echo "<script>window.location.href='index.php';</script>";
		
		
	}
	else
	{
		
		echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify1.php';</script>";
		
	}	
		
}
else
{
	echo "<script>alert('something went wroing');</script>";
		echo "<script>window.location.href='verify1.php';</script>";
}
}
?>


<!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>enter your otp</h3>
				
				 <form method="POST" enctype="multipart/form-data">
					<ul>
						<li class="text-info">enter your otp: </li>
						<li><input type="password" name="otp" value="enter your otp"></li>
					</ul>
                    
                    
					 						
					<input type="submit" name="submit" value="send">
					 
				</form>
			</div>
		</div>
	</div>
<!-- footer -->
	<?php
include("footer.php");
?>
<!-- //footer -->
</body>
</html>