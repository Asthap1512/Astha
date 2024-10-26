
<?php
include("sidebar.php");
include("header.php");
?>


<?php

include("config.php");
	if(isset($_GET['event_id']))
	{
		
		$event_id=$_GET['event_id'];
		$sql="select * from tbl_event where status=0 and event_id='$event_id'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$event_name=$row['event_name'];
	$event_type=$row['event_type'];
	$start_date=$row['start_date'];
	$end_date=$row['end_date'];
	$duration=$row['duration'];
	$event_image=$row['event_image'];
	$rag_fees=$row['rag_fees'];
}}
?>


<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>event Forms</h2>
					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<h4>event Form :</h4>
								</div>
								<div class="form-body">
									<form enctype="multipart/form-data" method="post"> 
										<div class="form-group"> 
											<label for="exampleInputEmail1">event name </label> 
											<input type="text" name="event_name" class="form-control"  value="<?php echo $event_name;?>" id="exampleInputEmail1" placeholder="event name"> 
										</div> 
                                        
										<div class="form-group"> 
											<label for="exampleInputPassword1">event type</label> 
											<input type="text" name="event_type" class="form-control" value="<?php echo $event_type;?>" id="exampleInputPassword1" placeholder="event_type"> 
										</div> 
										
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">start date</label> 
											<input type="date" name="start_date" class="form-control" value="<?php echo $start_date?>" id="exampleInputPassword1" placeholder="start date"> 
										</div> 
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">end date</label> 
											<input type="date" name="end_date" class="form-control"  value="<?php echo $end_date?>" id="exampleInputPassword1" placeholder="end date"> 
										</div> 
                                        
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">duration</label> 
											<input type="text" name="duration" class="form-control" value="<?php echo $duration?>" id="exampleInputPassword1" placeholder="duration"> 
										</div> 
                                        
		                                
                                        <div class="form-group"> 
											<label for="exampleInputPassword1">event_image</label> 
											<img src="eventimage/<?php echo $event_image; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br /><input type="file" name="event_image" id="event_image" style="float:left;" />
<input type="hidden" name="event_image" id="event_image"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $event_image;} ?>"/>
										</div> 
                                        </br></br>
                                         <div class="form-group"> 
											<label for="exampleInputPassword1">rag_fees</label> 
											<input type="text" name="rag_fees" class="form-control" value="<?php echo $rag_fees?>" id="exampleInputPassword1" placeholder="rag_fees"> 
										</div> 
                                        
                                        
                                         
										<button type="submit" name="submit" class="btn btn-default w3ls-button">Submit</button> 
									</form> 
								</div>
							</div>
						</div>
					</div>
					


<?php

include("config.php");
if(isset($_POST['submit']))
{
	if(isset($_FILES['event_image']))
           {
	$event_name=$_POST['event_name'];
	$event_type=$_POST['event_type'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$duration=$_POST['duration'];
	$event_image = trim($_FILES['event_image']['name']);

	
	if($_FILES["event_image"]["name"] == ''){
		 $event_image = $_POST['event_image'];
	}
	else{
		 $event_image = $_FILES['event_image']['name'];
	}

 
 move_uploaded_file($_FILES['event_image']['tmp_name'], "eventimage/".$_FILES['event_image']['name']);

	$rag_fees=$_POST['rag_fees'];
	$sql="update tbl_event set event_name='$event_name',event_type='$event_type',start_date='$start_date',end_date='$end_date',duration='$duration',event_image='$event_image',rag_fees='$rag_fees', where status=0 and event_id='$event_id'";
	$result=mysqli_query($con,$sql);
	if($result)
	{
				echo "<script>alert('event edited successfully');</script>";
	echo "<script>window.location.href='event.php'</script>";	
	

	}
}}

?>
    <?php
include("footer.php");
?>