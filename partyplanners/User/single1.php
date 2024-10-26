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
				
				
<div class="single1">
<div class="container">
	<div class="single1-page">					 
		<div class="flexslider details-lft-inf">
			<ul class="slides">
				
					
                    
                    <?php echo "<img class='img-responsive' src='../adminpartyplanners/serviceproviderlogo/$row[4]'style='height:300px;width:300px;'>" 
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
        <form method="POST">
			<h3><?php echo $service_category;?></h3>
            
            
            
            
            
            
            
            
            
            
            
            
            
            <style>
				  .rating1 {
    direction:ltr;
}
.starRating:not(old) {
    display: inline-block;
    height: 18px;
    width:100px;
    overflow: hidden;
}

.starRating:not(old) > input{
  margin-right :-26%;
  opacity      : 0;
}

.starRating:not(old) > label {
    float: right;
    background: url(images/1.png);
    background-size: contain;
    margin-right: 2px;
}

.starRating:not(old) > label:before{
  content         : '';
  display         : block;
  width           : 18px;
  height          : 18px;
  background      : url(images/2.png);
  background-size : contain;
  opacity         : 0;
  transition      : opacity 0.2s linear;
}

.starRating:not(old) > label:hover:before,
.starRating:not(old) > label:hover ~ label:before,
.starRating:not(:hover) > :checked ~ label:before{
  opacity : 1;
}
/*-- //Ratings --*/
/*-- //single-page --*/
/*-- to-top --*/
#toTop {
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: 55px;
	right: 2%;
	overflow: hidden;
	z-index: 999; 
	width: 32px;
	height: 32px;
	border: none;
	text-indent: 100%;
	background: url(images/up_arrow.png) no-repeat 0px 0px;
}
#toTopHover {
	width: 32px;
	height: 32px;
	display: block;
	overflow: hidden;
	float: right;
	opacity: 0;
	-moz-opacity: 0;
	filter: alpha(opacity=0);
}
</style> 



					<div class="rating1" form method="POST">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div><br>
                      
                    <input type="submit" name="ratenow" value="Rate Now" style="    outline: none;
    padding: 14px 0;
    background: #FF8D1B;
    border: none;
    width: 20%;
    font-size: 1em;
    color: #fff;
    font-weight: 700;
    letter-spacing: 2px;">
             </form>
					
                    <?php
					include('config.php');
					if(isset($_POST['ratenow']))
					{
						$star=$_POST['rating'];
						$service_name=$_REQUEST['service_name'];
	$sql="select * from tbl_ratting where email_id='$email_id' and service_name='$service_name'";
						
$result1=mysqli_query($con,$sql);
$count=mysqli_num_rows($result1);
					if($count>0)
					{
						echo "<script language='javascript'>alert('Sorry, You Already Rate For This service');</script>";
						echo "<script language='javascript'>window.location.href='index.php';</script>";
						}
						else
						{
$sql2="insert into tbl_ratting(email_id,service_name,ratting_score,date)values('$email_id','$service_name',$star,now())";
$result2=mysqli_query($con,$sql2);
						if($result2)
						{
							echo "<script language='javascript'>alert('Thank You For Rating');</script>";
							echo "<script language='javascript'>window.location.href='index.php';</script>";
						}
						}
					}
					?>
                                    
                  
                            
                       	
				
				
				
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
				
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