<?php
include("header.php");
?>
<h2 style="color:#204056;"> <center>Gallery Information!</center></h2>
                </br>                </br>
<?php    
	
	include("config.php");
					$sql = "select * from tbl_gallery where status=0";
		$result = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($result))
			{
		$Path="galleryimage/".$row['gallery_image'];
			?>	
				<div class="col-md-4 banner-bottom1-grid">
                 	
			
					<div class="banner-bottom1-grid1">
						                                <?php echo "<img alt='' class='img-responsive' src='./adminpartyplanners/galleryimage/$row[1]'style='height:300px;width:520px;'>" ?>

						<div class="head-para">
							<h3></h3>
							<p>
								</p>
						</div>
					</div>
				</div>
				<?php
			}
				?>
                
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <?php
	include("footer.php");
	?>