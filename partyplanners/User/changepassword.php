<?php
include("header.php");
?>



 <?php
 include("config.php");
                            if(isset($_POST['submit']))
                            {
								global $pass;
								$oldp = $_POST['old'];
								$newp = $_POST['newpass'];
								$conp = $_POST['con'];
								$sql = "select * from tbl_login where email_id = '$user' and status = 0";
								$result = mysqli_query($con,$sql);
								$count = mysqli_num_rows($result);
								if($count > 0)
								{
									while($row = mysqli_fetch_array($result))
									{
										$pass = $row['password'];
										
									}
									if($pass == $oldp)
									{
										if($newp == $conp)
										{
											$sql1 = "update tbl_login set password = '$newp' where email_id = '$user' and status = 0";
											$result1 = mysqli_query($con,$sql1);
											if($result1)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
											}
											
											
											
											
											$sql2 = "update tbl_user set password = '$newp' where email_id = '$user' and status = 0";
											$result2 = mysqli_query($con,$sql2);
											if($result2)
											{
												echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
												echo "<script language='javascript'>window.location.href='../index.php';</script>";
											}
											
											
											
											
											
										}
										else
										{
											echo "<script language='javascript'>alert('please enter same password is not match');</script>";
										}
									}
									else
									{
										echo "<script language='javascript'>alert('Please enter your Current Password');</script>";
									}
								}
							}
						?>





	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3> change password</h3>
				
				 <form method="POST" enctype="multipart/form-data">
					<ul>
						<li class="text-info">old password: </li>
                        
						<li><input type="password" name="old" ></li>
					</ul>
                    
                    
					<ul>
						<li class="text-info">new password: </li>
						<li><input type="password" name="newpass" ></li>
					 </ul>				 
					<ul>
						<li class="text-info">confirm password: </li>
						<li><input type="password" name="con"></li>
					</ul>
					
						
                    						
					<input type="submit" name="submit" value="change password">
					
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