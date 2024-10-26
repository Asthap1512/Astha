<?php

	ob_start();
	session_start();
?>

<?php
include("header.php");
?>
<?php
include('config.php');
	if(isset($_POST['submit']))
	{
		
		$user = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from tbl_login where email_id = '$user' and password = '$password' and status=0";
		$result = mysqli_query($con,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
					$type= $row['type'];
			}
			if(($type=="admin")||($type=='Admin'))
			{
			$_SESSION['user'] = $user;								
	echo "<script language='javascript'>window.location.href='adminpartyplanners/index.php';</script>";
			}
			elseif(($type=="user")||($type=='User'))
			{
			$_SESSION['user'] = $user;
			echo "<script language='javascript'>window.location.href='User/index.php';</script>";
			}
			}
		else
		{
	echo "<script language='javascript'>alert('Your Emailid  or Password is wrong');</script>";
				
				
		}
		}
	?>

			
<!---->
<!-- login-page -->
<div class="login">
	<div class="container">
		<div class="login-grids">
			<div class="col-md-6 log">
					 <h3>Login</h3>
					 <div class="strip"></div>
					 <p>Welcome, please enter the following to continue.</p>
					 <p>If you have previously Login with us, <a href="register.php">Click Here</a></p>
					 <form method="POST">
						 <h5>email id:</h5>	
						 <input type="text" name="username" value="">
						 <h5>Password:</h5>
						 <input type="password" name="password" value="">					
						 <input type="submit" name="submit" value="Login">
						  
					 </form>
					<a href="forogot.php">Forgot Password ?</a>
			</div>
			<div class="col-md-6 login-right">
					<h3>New Registration</h3>
					<div class="strip"></div>
					<p>By creating an account with our website.</p>
					<a href="register.php" class="button">Create An Account</a>
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