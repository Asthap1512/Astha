
<?php
include("header.php");
?>


			<?php
			global $user_id;
include("config.php");
if(isset($_POST['submit']))
{
	


$user_id=$_POST['user_id'];
$event_type=$_POST['event_type'];
$location=$_POST['location'];
$numberof_person=$_POST['numberof_person'];
$dish_range=$_POST['dish_range'];




$sql2="select * from tbl_user where email_id='$user' and status=0";
$restult2=mysqli_query($con,$sql2);
while($row=mysqli_fetch_array($restult2))
{
	$user_id=$row['user_id'];
}






$sql="insert into   tbl_userrequrement(user_id,event_type,location,numberof_person,dish_range)value('$user_id','$event_type','$location','$numberof_person','$dish_range')";
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
				<h3>User requrement form</h3>
				
				 <form method="POST" enctype="multipart/form-data">
                    
                    
					<ul>
						<li class="text-info">user_id: </li>
						<li><input type="text" name="user_id" value="<?php echo $user?>"></li>
					 </ul>				 
					<ul>
						<li class="text-info">event_type: </li>
						<li><td><select name="event_type">
<option value="select event typr">select event typr</option>
<option value="complete wedding planning">complete wedding planning</option>
><option value="partial wedding planning">partial wedding planning</option>
><option value="vendor management">vendor management</option>
<option value="guest management">guest management</option>
<option value="venue booking only">venue booking only</option>
<option value="wedding decor only">wedding decor only</option>
<option value="wedding packages">wedding packages</option>
<option value="other requirements">other requirements</option>
</select>
</td></li>
					</ul>
                    
                    <ul>
						<li class="text-info">location: </li>
						<li><input type="text" name="location" value="enter location"></li>
					</ul>
                    
                    <ul>
						<li class="text-info">numberof_person: </li>
						<li><input type="text" name="numberof_person" value="enter numberof person"></li>
					</ul>
                    
                   
                    <ul>
						<li class="text-info">dish_range: </li>
						<li><td><select name="dish_range">
<option value="select dish range">select dish range</option>
<option value="100-200">100-200</option>
><option value="200-300">200-300</option>
><option value="300-400">300-400</option>
<option value="400-500">400-500</option>
<option value="500 above">500 above</option>

</select>
</td></li>
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