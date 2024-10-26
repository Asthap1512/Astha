
<?php
include("sidebar.php");
include("header.php");
?>

<?php

include("config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$contact_no=$_POST['contact_no'];
	$email_id=$_POST['email_id'];
	$massage=$_POST['massage'];
	$sql="insert into tbl_contact(name,contact_no,email_id,massage)value('$name','$contact_no','$email_id','$massage')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "record inserted";
	
	}
}

?>


					
<div class="table-heading">
					<h2>Mange contact </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>contact</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>name</th>
<th>contact_no</th>
<th>email_id</th>
<th>massage</th>


<th>delete</th>



						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
$sql="select * from tbl_contact where status=0";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["name"];?></td>
<td><?php echo $row["contact_no"];?></td>
<td><?php echo $row["email_id"];?></td>
<td><?php echo $row["massage"];?></td>
<td><a href="contact.php?contact_id=<?php echo $row["contact_id"];?>">
<img src="images/delete.jpg"></a>
</td>



</td>


</tr>
<?php
}
?>


						  </tr>
						 
						</tbody>
					  </table>
					</div>




    <?php
	if(isset($_GET['contact_id']))
	{
		
		$contact_id=$_GET['contact_id'];
		$sql="update tbl_contact set status=1 where contact_id='$contact_id'";
		
	$result=mysqli_query($con,$sql);
	 if($result)
	 {
		 
	echo "record delete";	 
		 
		 
	 }
	 
}
?>
	<?php
include("footer.php");
?>