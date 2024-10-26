
<?php
include("sidebar.php");
include("header.php");
?>



<div class="table-heading">
					<h2>Mange event payment </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>payment</h3>
					    <table id="table">
						<thead>
						  <tr>
							
<th>user_id</th>
<th>rag_fees</th>
<th>date</th>


<th>delete</th>


						  </tr>
						</thead>
						<tbody>
						  <tr>
	<?php
	include("config.php");
$sql="select * from tbl_payment where status=0";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
?>
<tr>
<td><?php echo $row["user_id"];?></td>
<td><?php echo $row["rag_fees"];?></td>
<td><?php echo $row["date"];?></td>

<td><a href="payment.php?pay_id=<?php echo $row["pay_id"];?>">
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
if(isset($_GET['pay_id']))
{
		$pay_id=$_GET['pay_id'];
		$sql="update tbl_payment set status=1 where pay_id='$pay_id'";
		
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