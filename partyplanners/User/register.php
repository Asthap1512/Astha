<?php
include("header.php");
?>
<?php
				
include 'config.php';
if(isset($_POST['submit']))
{
	$sql=("SELECT `mo_number` FROM `tbl_user` WHERE `mo_number`='".$_POST['mo_number']."'");
$result=mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0)
{

	$_SESSION['error']="Mobile Number Already Exist";
	$error=$_SESSION['error'];
	echo "<script language='javascript'>alert(".$error.")</script>";
	
	
}
else
{
	$otp=rand(0000,9999);
	$_SESSION['otp']=$otp;
	

	
$full_name=$_POST['full_name'];
	$city=$_POST['city'];
	$adderss=$_POST['adderss'];
	$email_id=$_POST['email_id'];
	$password=$_POST['password'];
	$id_proof=trim($_FILES['id_proof']['name']);
	$mo_number=$_POST['mo_number'];


	
	

$sql1=("INSERT INTO `tbl_user`(`full_name`,`city`, `adderss`, `email_id`, `password`,`id_proof`,`mo_number`,`create_date`,`otp`,`status`) VALUES ('".$_POST['full_name']."','".$_POST['city']."','".$_POST['adderss']."',
	'".$_POST['email_id']."','".$_POST['password']."','$id_proof','".$_POST['mo_number']."',now(),'$otp',1)");
	
	
	$result1=mysqli_query($con,$sql1);
	
	$sql2=("INSERT INTO `tbl_login`(`email_id`, `password`, `type`, `status`) VALUES ('".$_POST['email_id']."','".$_POST['password']."','user',1)");
	$result2=mysqli_query($con,$sql2);
	if(mysqli_affected_rows($con)>0)
	
		
	
	if(mysqli_affected_rows($con)>0)
	{
		
		$msg=urlencode('Your Verification Code Is '.$otp);file_get_contents('https://www.fast2sms.com/dev/bulk?authorization=lNm9ArQwYjgahMnb48RsKJfZVi75Hv2e03CpdcTqzkLuG1Oo6DXD09nOvmUoq4ghc2H5aJYQ7pNiSKwF&sender_id=FSTSMS&message='.$msg.'&language=english&route=p&numbers='.$_POST['mo_number']);

		echo "<script>alert('we have send OTP to your mobile number,pl enter that to verify your account');</script>";
	
		echo "<script>window.location.href='verify1.php?mo_number=".$mo_number."';</script>";
		
	}
	else
	{
		echo "<script>alert('Error creating account');</script>";
		echo "<script>window.location.href='index.php';</script>";
		
		
}
}}
?>	

	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Register Now</h3>
				<p>Welcome, please enter the following details to continue.</p>
				<p>If you have previously registered with us, <a href="login.php">click here</a></p>
				 <form method="POST" enctype="multipart/form-data">
					<ul>
						<li class="text-info">Full Name: </li>
                         <script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
				
            }
        }

    </script>
     
						<li><input type="text" name="full_name" value="enter full name(input only alphabeta)"onKeyPress="return onlyAlphabets(event,this);"></li>
					</ul>
                    
                    
					<ul>
						<li class="text-info">city: </li>
						<li><input type="text" name="city" value=" enter city"></li>
					 </ul>				 
					<ul>
						<li class="text-info">adderss: </li>
						<li><input type="text" name="adderss" value="enter adderss"></li>
					</ul>
					<ul>
						<li class="text-info">email id: </li>
						<li><input type="text" name="email_id" value=" enter email id"></li>
					</ul>
					<ul>
						<li class="text-info">Password:</li>
						<li><input type="password" name="password" value=" enter password"></li>
					</ul>
                     <?php
 if(isset($_FILES['id_proof']))
 {
	 $file_name=$_FILES['id_proof']['name'];
	 $file_tmp=$_FILES['id_proof']['tmp_name'];
	 $file_size=$_FILES['id_proof']['size'];
     if($_FILES['id_proof']['size'] > 10526552)
	 {
         echo "<br>image size is greater";
	 }
	 else
	 {
         if(move_uploaded_file($file_tmp,'idproof/'.$file_name))
		 { 
			 
		 }}
 }
 ?>
					<ul>
						<li class="text-info">id proof:</li>
						<li><input type="file" name="id_proof" value="enter id proof"></li>
					</ul>
                    					 <script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>  
	  <span id="error" class="ss-icon" style="color: Red; display: none" ></span>
                    <ul>
						<li class="text-info">mo number:</li>
						<li><input type="text" name="mo_number" value="enter mo number(input only 0-9 digits)" minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" ></li>
					</ul>
                    						
					<input type="submit" name="submit" value="Register Now">
					<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
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