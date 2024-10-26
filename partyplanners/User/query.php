
<?php
include("header.php");
?>


			


<?php
global $user_id;
include("config.php");
if(isset($_POST['submit']))
{
$user_id=$_POST['user_id'];
$description=$_POST['description'];






$sql1="select * from tbl_user where email_id='$user' and status=0";
$restult1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($restult1))
{
	$user_id=$row['user_id'];
}







$sql="insert into  tbl_query(user_id,description)value('$user_id', '$description')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "record inserted";
}
	
}
?>



	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>query form</h3>
				
				 <form method="POST" enctype="multipart/form-data">
                    
                    
					<ul>
						<li class="text-info">user_id: </li>
						<li><input type="text" name="user_id" value="<?php echo $user?>"></li>
					 </ul>				 
					<ul>
						<li class="text-info">description: </li>
						<li><input type="text" name="description" value="enter description"></li>
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