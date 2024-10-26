<?php
include("header.php");
?>


<?php
global $rag_fees,$email_id;
include("config.php");

$sql="select * from tbl_eventbooking  ";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	
	
	$rag_fees=$row['rag_fees'];

}

?>


<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3> event payment</h3>
				
				 <form method="POST" enctype="multipart/form-data">
					<ul>
						<li class="text-info">email id: </li>
                        
						<li><input type="text" name="email_id" value="<?php echo $user;?>" ></li>
					</ul>
                    
                    
					<ul>
						<li class="text-info">rag_fees: </li>
						<li><input type="text" name="rag_fees" value="<?php echo $rag_fees;?>" ></li>
					 </ul>				 
					
						
                    						
					<input type="submit" name="submit" value="eventpayment">
					
				</form>
			</div>
		</div>
	</div>

<?php
include('config.php');
												if(isset($_POST['submit']))
												{
													$reg_fees=$_POST['rag_fees'];
														
													
													
													
													$date=@$_POST['date'];
														
	
	$sql1 = "select * from tbl_user where email_id = '$user' and status = 0";
													$result1 = mysqli_query($con,$sql1);
													while($row = mysqli_fetch_array($result1))
													{
														$user_id = $row['user_id'];
														
													}
																								
													
	$sql="insert into tbl_payment(user_id,rag_fees,date)
	values('$user_id','$rag_fees',NOW())";
	$result=mysqli_query($con,$sql);
	if($result)
												{
echo "<script language='javascript'>alert('Payment done');</script>";												
												echo "<script language='javascript'>window.location.href='index.php'</script>";
												}
												}
												
	?>
    </table>
	








<?php
	include("footer.php");
	?>