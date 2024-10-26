<?php
include("header.php");
?>
<?php
include("config.php");

		$sql="select * from tbl_user where status=0 and email_id='$user'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$full_name=$row['full_name'];
	$city=$row['city'];
	$adderss=$row['adderss'];
	
	$id_proof=$row['id_proof'];
	$mo_number=$row['mo_number'];
	
}
?>


	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>edit profile</h3>
				
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
     
						<li><input type="text" name="full_name" onKeyPress="return onlyAlphabets(event,this);" value="<?php echo $full_name;?>"></li>
					</ul>
                    
                    
					<ul>
						<li class="text-info">city: </li>
						<li><input type="text" name="city" value="<?php echo $city;?>" ></li>
					 </ul>				 
					<ul>
						<li class="text-info">adderss: </li>
						<li><input type="text" name="adderss" value="<?php echo $adderss;?>" ></li>
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
						<li><img src="../idproof/<?php echo $id_proof; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br /><input type="file" name="id_proof" id="id_proof" style="float:left;" />
<input type="hidden" name="id_proof" id="id_proof"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $id_proof;} ?>"/></li>
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
						<li><input type="text" name="mo_number"  minlength="10" maxlength="10" onkeypress="return IsNumeric(event);" ondrop="return false;" value="<?php echo $mo_number;?>" ></li>
					</ul>
                    						
					<input type="submit" name="submit" value="edit profile">
					
				</form>
			</div>
		</div>
	</div>
<!-- footer --><?php

include("config.php");
if(isset($_POST['submit']))
{
	$full_name=$_POST['full_name'];
	$city=$_POST['city'];
	$adderss=$_POST['adderss'];
	
	$id_proof = trim($_FILES['id_proof']['name']);

	
	if($_FILES["id_proof"]["name"] == ''){
		 $id_proof = $_POST['id_proof'];
	}
	else{
		 $id_proof = $_FILES['id_proof']['name'];
	}

 
 move_uploaded_file($_FILES['id_proof']['tmp_name'], "../idproof/".$_FILES['id_proof']['name']);
	$mo_number=$_POST['mo_number'];
	

	$sql="update tbl_user set full_name='$full_name',city='$city',adderss='$adderss',id_proof='$id_proof',mo_number='$mo_number' where status=0 and email_id='$user'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "<script>alert('user edited successfully');</script>";
	echo "<script>window.location.href='index.php'</script>";	
	
	
	}
}


?>

	<?php
include("footer.php");
?>
<!-- //footer -->
</body>
</html>