<?php
include("header.php");
?>
<!-- //banner -->
<!--
<!-- //banner-bottom1 -->
<!-- banner-bottom -->
				<h2 style="color:#204056;"> <center>serviceprovider Information!</center></h2>
                </br>                </br>
                
                
                
	<div class="banner-bottom">
		<div class="container">
			<div class="product-one">
            <?php    
	
	include("config.php");
					$sql = "select * from tbl_serviceprovider where  status=0";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result))
			{
		$Path="serviceproviderlogo/".$row['logo'];
			?>		
				<div class="col-md-2 product-left"> 
                
                	
                
                
                
                
                
					<div class="p-one simpleCart_shelfItem jwe">	
                    			
							<a href="#">
								
                                
                                
                                
                                
                                <?php echo "<img alt='' class='img-responsive' src='../adminpartyplanners/serviceproviderlogo/$row[4]'style='height:150px;width:150px;'>" ?>
                                
                                
                                
                                
                                
								<div class="mask">
								<a class="hvr-shutter-out-horizontal" href="single1.php?service_name=
						<?php echo $row['service_name'];?>" >
									<span>Quick View</span></a>
								</div>
							</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p> <span class=" item_price"><?php echo $row['service_category'];?></span></a></p>



<p> <span class=" item_price">booking.rate:<?php echo $row['booking_rate'];?></span></a></p>




							</div>
							
							
                          <div class="single-but item_add">
					<input type="submit" value="Book Now">
				</div>
                            
                            <div class="clearfix"> </div>
                              
                            
						</div>
					</div>
				</div><?php
			}
			?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>                     
                          
                          
                          
                          
                            
                            
	 
                            
                            
                            
                            <?php
	include("footer.php");
	?>