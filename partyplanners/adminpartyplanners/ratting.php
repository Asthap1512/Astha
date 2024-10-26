
<?php
include("sidebar.php");
include("header.php");
?>



<div class="table-heading">
					<h2>Mange ratting </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>ratting</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>email_id</th>
<th>service_name</th>
<th>ratting_score</th>
<th>date</th>


<th>delete</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
	include("config.php");
$sql="select * from tbl_ratting where status=0";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["email_id"];?></td>
<td><?php echo $row["service_name"];?></td>
<td><?php echo $row["ratting_score"];?></td>
<td><?php echo $row["date"];?></td>


<td><a href="ratting.php?rate_id=<?php echo $row["rate_id"];?>">
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
if(isset($_GET['rate_id']))
{
		$rate_id=$_GET['rate_id'];
		$sql="update tbl_ratting set status=1 where rate_id='$rate_id'";
		
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