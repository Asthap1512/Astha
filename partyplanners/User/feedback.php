
<?php
include("header.php");
?>


			<?php
			global $user_id;
include("config.php");
if(isset($_POST['submit']))
{
	


$Feedback_msg=$_POST['Feedback_msg'];
$sql1="select * from tbl_user where email_id=$user and status=0";
$restult1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($restult1))
{
	$user_id=$row['user_id'];
}





$sql="insert into  tbl_feedback(user_id,date,Feedback_msg)value('$user_id',now(),'$Feedback_msg')";
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
				<h3>feedback form</h3>
				
				 <form method="POST" enctype="multipart/form-data">
                    
                    
					<ul>
						<li class="text-info">user_id: </li>
						<li><input type="text" name="user_id" value="<?php echo $user?>"></li>
					 </ul>				 
					<ul>
						<li class="text-info">Feedback_msg: </li>
						<li><input type="text" name="Feedback_msg" value="enter Feedback msg"></li>
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