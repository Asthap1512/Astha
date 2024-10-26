<?php
include("header.php");
?>
<!---->
<!-- single-page -->
<?php   
							include("config.php");				
					
					
					
		
	
	
	
	
	$sql = "select * from tbl_event where status=0 and event_id='".$_REQUEST['event_id']."' ";
	
	
	
	
				
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
							
						
						
						$event_name=$row['event_name'];
						
						
$event_type=$row['event_type'];

$start_date=$row['start_date'];

$Path="eventimage/".$row['event_image'];
$end_date=$row['end_date'];
$duration=$row['duration'];

$rag_fees=$row['rag_fees'];




						
						
						
						
						
						
						
			?>
				
				
<div class="single">
<div class="container">
	<div class="single-page">					 
		<div class="flexslider details-lft-inf">
			<ul class="slides">
				
					<form method="post">
                    
                    <?php echo "<img class='img-responsive' src='../adminpartyplanners/eventimage/$row[6]'style='height:300px;width:300px;'>" 
			 ?>
                    
				
				
			</ul>
		</div>
			<!-- FlexSlider -->
			  <script defer src="js/jquery.flexslider.js"></script>
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

				<script>
			// Can also be used with $(document).ready()
			$(window).load(function() {
			  $('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			  });
			});
			</script>
		<div class="details-left-info">
			<h3><?php echo $event_name;?></h3>
				
			<div class="simpleCart_shelfItem">
				<p><span class="item_price qwe">reg.fees:-<?php echo $rag_fees;?></span> </p>
				<div class="col-rad">
					<div class="col-rad-left">
						
					</div>
					<div class="col-rad-right">
						<section>
							<div class="row">
								<div class="colr ert">
									
								</div>
								<div class="colr">
									
								</div>
							</div>						
						</section>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-rad tyy">
					<div class="col-rad-left" style="width:500px;">
						<p>start_date :<?php echo $start_date;?></p>
                        <p>end_date :<?php echo $end_date;?></p>
                        <p>duration :<?php echo $duration;?></p>
                        
                        
                        
                        
                        
                        
                        
					</div>
					<div class="col-rad-right">
						<section>
							<div class="row">
								<div class="colr ert">
									
								</div>
								<div class="colr">
									
								</div>
								<div class="colr">
									
								</div>
							</div>						
						</section>
					</div>
					<div class="clearfix"> </div>
				</div>
				
	                      
                    
                    
                    
                    
				</div>
			</div>
			<div>
			
			</div>
			
		</div>
		<div class="clearfix"></div>				 	
	</div>
	
<!-- collapse -->
<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         How to event type?
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php echo $event_type;?>
                                 <input type="submit" name="book" style="border:1px;  height:28px; width:150px;  background:pink; font=bold; border-radius: 25px;"  value="Book now" class="cws-button alt gray-dark mb-20">

      </div>
    </div>
  </div>
  <?php
					}
					?>



					<?php
include("config.php");

if(isset($_POST['book']))
{
	
	
	
	
	$sql="insert into tbl_eventbooking(email_id,event_name,rag_fees,book_date,status)value
	('$user','$event_name','$rag_fees',NOW(),'pending')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script language='javascript'>alert('Your event booking request is send successfully.');</script>";
	echo "<script language='javascript'>location.href = 'eventpayment.php';</script>";
}
}
					?>
		</form>
					
					
					
				

<!-- collapse -->
<!-- related products -->
<br/><br/><br/><br/>
	</div></div></div>
<!-- single -->
<!-- footer -->
	<?php
	include("footer.php");
	?>