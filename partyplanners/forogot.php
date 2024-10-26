
<?php
include("header.php");
?>
<?php
include('config.php');

		if(isset($_POST['submit']))
					{
			
		$email_id = $_POST['email_id'];
	$sql = "select * from tbl_login where email_id = '$email_id' and status = 0";
					$result = mysqli_query($con,$sql);
						$count = mysqli_num_rows($result);
						if($count > 0)
						{
				while($row = mysqli_fetch_array($result))
					  		{
						$pass= $row['password'];
						}
					include ("class.phpmailer.php"); // include the class name
					$mail = new PHPMailer(); // create a new object
						$mail->IsSMTP(); // enable SMTP
				$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
				$mail->SMTPAuth = true; // authentication enabled
						$mail->SMTPSecure = 'tls';
						$mail->Host = 'smtp.gmail.com';
												/*$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
												$mail->Host = "mail.gmail.com";*/
								$mail->Port = 587; // or 587
								$mail->IsHTML(true);
	$mail->Username = "Partyplanners2002@gmail.com";
		$mail->Password = "Party*planners";
				$mail->SetFrom("Partyplanners2002@gmail.com");
				$mail->Subject = "Forgot Password Details";
				$mail->Body = "<html>
		<body style='color:black;'>
				<br> Dear User <br> <br> 
																		You have requested to send the password for login.																	So according to your requirement your Password is $pass. <br> 
																		Kindly requsting to you to use this details for further login. <br> <br> 
																		Thank you for Contacting us. <br>party planners team<br>
																	</body>
																</html>";
				$mail->AddAddress($email_id);
									if(!$mail->Send())
												{
													echo "<script language='javascript'>alert('" . $mail->ErrorInfo . "');</script>";
												}
												else
												{
													echo "<script language='javascript'>alert('Mail has been sent');</script>";
													echo "<script language='javascript'>window.location.href='index.php';</script>";
												}
											}
											else
											{
												echo "<script language='javascript'>alert('User Name  or Password is wrong');</script>";
											}
										}
									?>      
        				  
			
<!---->
<!-- login-page -->
<div class="login">
	<div class="container">
		<div class="login-grids">
			<div class="col-md-6 log">
					 <h3>fotogot password</h3>
					 <div class="strip"></div>
					 
					 <form method="POST">
						 <h5>email id:</h5>	
						 <input type="text" name="email_id" value="">
									</br></br>		
						 <input type="submit" name="submit" value="submit">
						  
					 </form>
				
			</div>
						<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //login-page -->
<!-- footer -->
	<?php
include("footer.php");
?>
<!-- //footer -->
</body>
</html>