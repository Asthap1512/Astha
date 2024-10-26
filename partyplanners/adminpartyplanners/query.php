
<?php
include("sidebar.php");
include("header.php");
?>



<div class="table-heading">
					<h2>Mange query </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>query</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>user_id</th>
<th>description</th>

<th>delete</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
	include("config.php");
$sql="select * from tbl_query where status=0";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["user_id"];?></td>
<td><?php echo $row["description"];?></td>

<td><a href="query.php?query_id=<?php echo $row["query_id"];?>">
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
if(isset($_GET['query_id']))
{
		$query_id=$_GET['query_id'];
		$sql="update tbl_query set status=1 where query_id='$query_id'";
		
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