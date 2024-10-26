<?php
include("header.php");
?>
<!-- //banner -->
<!--
<!-- //banner-bottom1 -->
<!-- banner-bottom -->
				<h2 style="color:#204056;"> <center>Search Result!</center></h2>
                </br>                </br>
                
                
                
	<div class="banner-bottom"> 
		<div class="container">
			<div class="product-one">
        <?php    
	
	include("config.php");
	
	

if(isset($_GET['submit']))
	  {
		  $search_query=$_GET['search'];
            
            
            
            
            
            
              
	
	
					$sql = "select * from tbl_event where status=0 and event_name like '%$search_query%'";


$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result))
			{
		$Path="event_image/".$row['event_image'];
			?>		
				<div class="col-md-2 product-left"> 
                
                	
                
                
                
                
                
					<div class="p-one simpleCart_shelfItem jwe">	
                    			
							<a href="#">
								
                                
                                
                                
                                
                                <?php echo "<img alt='' class='img-responsive' src='./adminpartyplanners/eventimage/$row[6]'style='height:150px;width:150px;'>" ?>
                                
                                
                                
                                
                                
								<div class="mask">
								<a class="hvr-shutter-out-horizontal" href="single.php?event_id=
						<?php echo $row['event_id'];?>" >
									<span>Quick View</span></a>
								</div>
							</a>
						<div class="product-left-cart">
							<div class="product-left-cart-l">
								<p> <span class=" item_price"><?php echo $row['event_name'];?></span></a></p>



<p> <span class=" item_price">Reg.Fees:<?php echo $row['rag_fees'];?></span></a></p>



							</div>
							
							
                          <div class="single-but item_add">
					<input type="submit" value="Book Now" onclick="alert('Login First!')">
				</div>
                            
                            <div class="clearfix"> </div>
                              
                            
						</div>
					</div>
				</div><?php
			}}
			?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
                            
                            
                            
                            
                            
                          
                          
            	                </br>                </br>
                
                
                
	
                          
                          
                          
                          
                          
                          
                          
                          
                          
                            
                            
				
	<?php
	include("footer.php");
	?>