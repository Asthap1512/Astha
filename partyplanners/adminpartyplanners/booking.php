
<?php
include("sidebar.php");
include("header.php");
?>
<?php

include("config.php");
if(isset($_POST['submit']))
{
	$full_name=$_POST['email_id'];
	$city=$_POST['event_name'];
	$adderss=$_POST['rag_fees'];
	$email_id=$_POST['book_date'];
	

	$sql="insert into tbl_user(email_id,event_name,rag_fees,book_date)value('$email_id','$event_name','$rag_fees','$book_date')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "record inserted";
	
	}
}


?>

<div class="table-heading">
					<h2>Mange Event Booking </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3> event booking</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>email_id</th>
<th>event_name</th>
<th>rag_fees</th>
<th>book_date</th>

<th>approve</th>



						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
$sql="select * from  tbl_eventbooking where status='pending'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["email_id"];?></td>
<td><?php echo $row["event_name"];?></td>
<td><?php echo $row["rag_fees"];?></td>
<td><?php echo $row["book_date"];?></td>

<td><a href="booking.php?Eventbook_id=<?php echo $row["Eventbook_id"];?>">
<img src="images/approve.jpg"></a>
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
if(isset($_GET['Eventbook_id']))
{
		$Eventbook_id=$_GET['Eventbook_id'];
		$sql="update tbl_eventbooking set status='approve' where Eventbook_id='$Eventbook_id'";
		
	$result=mysqli_query($con,$sql);
	 if($result)
	 {
		 
	echo "record approve";	 
		 
		 
	 }
	 
}
?>
	<?php
include("footer.php");
?>