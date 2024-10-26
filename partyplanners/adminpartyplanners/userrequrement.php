
<?php
include("sidebar.php");
include("header.php");
?>



<div class="table-heading">
					<h2>Mange user requrement </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>user requrement</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>user_id</th>
<th>event_type</th>
<th>location</th>
<th>numberof_person</th>
<th>dish_range</th>

<th>delete</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
	include("config.php");
$sql="select * from tbl_userrequrement where status=0";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["user_id"];?></td>
<td><?php echo $row["event_type"];?></td>
<td><?php echo $row["location"];?></td>
<td><?php echo $row["numberof_person"];?></td>
<td><?php echo $row["dish_range"];?></td>


<td><a href="userrequrement.php?req_id=<?php echo $row["req_id"];?>">
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
if(isset($_GET['req_id']))
{
		$req_id=$_GET['req_id'];
		$sql="update tbl_userrequrement set status=1 where req_id='$req_id'";
		
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