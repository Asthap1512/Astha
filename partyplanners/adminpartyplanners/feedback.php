
<?php
include("sidebar.php");
include("header.php");
?>



<div class="table-heading">
					<h2>Mange feedback </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>feedback</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>email</th>
<th>date</th>
<th>Feedback_msg</th>

<th>delete</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
	include("config.php");
$sql="select pl.email_id,lgn.* from tbl_feedback lgn INNER JOIN
tbl_user pl ON pl.user_id=lgn.user_id and lgn.status=0";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["email_id"];?></td>
<td><?php echo $row["Date"];?></td>
<td><?php echo $row["Feedback_msg"];?></td>

<td><a href="feedback.php?Feedback_id=<?php echo $row["Feedback_id"];?>">
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
if(isset($_GET['Feedback_id']))
{
		$Feedback_id=$_GET['Feedback_id'];
		$sql="update tbl_feedback set status=1 where Feedback_id='$Feedback_id'";
		
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