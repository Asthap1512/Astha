<?php
include("header.php");
?>
<!---->
<!-- single-page -->
<?php   
							include("config.php");				
					
					
					
		
	
	
	
	
	$sql = "select * from tbl_serviceprovider where status=0 and service_name='".$_REQUEST['service_name']."' ";
	
	
	
	
				
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
							
						
						
						$service_category=$row['service_category'];
						
						
$owner_name=$row['owner_name'];

$description=$row['description'];

$Path="serviceproviderlogo/".$row['logo'];


$city=$row['city'];
$adderss=$row['adderss'];

$contact_no=$row['contact_no'];
$booking_rate=$row['booking_rate'];



						
						
						
						
						
						
						
			?>
				
				
<div class="single">
<div class="container">
	<div class="single-page">					 
		<div class="flexslider details-lft-inf">
			<ul class="slides">
				
					
                    
                    <?php echo "<img class='img-responsive' src='./adminpartyplanners/serviceproviderlogo/$row[4]'style='height:300px;width:300px;'>" 
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
			<h3><?php echo $service_category;?></h3>
				
			<div class="simpleCart_shelfItem">
				<p><span class="item_price qwe">booking rate:-<?php echo $booking_rate;?></span> </p>
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
						<p>service_category :<?php echo $service_category;?></p>
                        <p>owner_name :<?php echo $owner_name;?></p>
                        <p>description :<?php echo $description;?></p>
                        <p>city :<?php echo $city;?></p>
                        
                        <p>contact_no :<?php echo $contact_no;?></p>
                        
                        
                        
                        
                        
                        
                        
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
				
				<div class="single-but item_add">
					 <a  style="color: #fff;
    display: inline-block;
    text-transform: uppercase;
    text-decoration: none;
    background: #204056;
    text-align: center;
    padding: 6px 30px;
    font-weight: bold;" class="service-btn" onclick="alert('Home page')";  href="index.php">Back To Home Page</a>		
							
                    
                    
                    
                    
                    
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
        Address
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php echo $adderss;?>
      </div>
    </div>
  </div>
  <?php
					}
					?>
<!-- collapse -->
<!-- related products -->
<br/><br/><br/><br/>
	</div></div></div>
<!-- single -->
<!-- footer -->
	<?php
	include("footer.php");
	?>