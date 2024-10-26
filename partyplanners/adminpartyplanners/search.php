
<?php
include("sidebar.php");
include("header.php");
?>

<?php

include("config.php");
if(isset($_POST['submit']))
{
	$event_name=$_POST['event_name'];
	$event_type=$_POST['event_type'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$duration=$_POST['duration'];
	$event_image=trim($_FILES['event_image']['name']);
	$rag_fees=$_POST['rag_fees'];
	$sql="insert into tbl_event(event_name,event_type,start_date,end_date,duration,event_image,rag_fees)value('$event_name','$event_type','$start_date','$end_date','$duration','$event_image','$rag_fees')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "record inserted";
	
	}
}

?>

					

<div class="table-heading">
					<h2>search event result </h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h3>Event</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>event name</th>
<th>event_type</th>
<th>start_date</th>
<th>end_date</th>
<th>duration</th>
<th>event_image</th>
<th>rag_fees</th>



						  </tr>
						</thead>
						<tbody>
						  <tr>
							        <?php    
	
	include("config.php");
	
	

if(isset($_GET['submit']))
	  {
		  $search_query=$_GET['search'];
            
            
            
            
            
            
              
	
	
					$sql = "select * from tbl_event where status=0 and event_name like '%$search_query%'";


$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
    <td><?php echo $row["event_name"];?></td>
    <td><?php echo $row["event_type"];?></td>
    <td><?php echo $row["start_date"];?></td>
    <td><?php echo $row["end_date"];?></td>
    <td><?php echo $row["duration"];?></td>
    <td><img src="eventimage/<?php echo $row["event_image"];?>"style="width:50px;height:50px;"></td>
    <td><?php echo $row["rag_fees"];?></td>
    
</td>
    </tr>
    <?php
}}
?>

						  </tr>
						 
						</tbody>
					  </table>
					</div>
				

    <?php
	if(isset($_GET['event_id']))
	{
		
		$event_id=$_GET['event_id'];
		$sql="update tbl_event set status=1 where event_id='$event_id'";
		
	$result=mysqli_query($con,$sql);
	 if($result)
	 {
		 
	echo "record delete";	 
		 
		 
	 }
	 
}
?>



<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
$("#TextBox1").datepicker({
    minDate: 0,
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var min = $(this).datepicker('getDate'); // Get selected date
        $("#TextBox2").datepicker('option', 'minDate', min || '0'); // Set other min, default to today
    }
});

$("#TextBox2").datepicker({
    minDate: '0',
    maxDate: '+1Y+6M',
    onSelect: function (dateStr) {
        var max = $(this).datepicker('getDate'); // Get selected date
        $('#datepicker').datepicker('option', 'maxDate', max || '+1Y+6M'); // Set other max, default to +18 months
        var start = $("#TextBox1").datepicker("getDate");
        var end = $("#TextBox2").datepicker("getDate");
        var days = (end - start) / (1000 * 60 * 60 * 24);
        $("#TextBox3").val(days);
    }
});
</script>
	<?php
include("footer.php");
?>