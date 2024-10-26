<?php
	ob_start();
	session_start();
	global $user;
	@$user=$_SESSION["user"];			
	if($user == "  ")
	{
		echo "<script language='javascript'>window.location.href='index.php';</script>";							
	}
?>
<?php
	global $email_id,$user_id;
		include("config.php");
		$sql= "select * from tbl_user where email_id = '$user' and status = 0";
				$result=mysqli_query($con,$sql);
				$count = mysqli_num_rows($result);
				while($row = mysqli_fetch_array($result))
					{
					$email_id = $row['email_id'];
					$user_id = $row['user_id'];
					
					}
	?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Party planners </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pendent Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	
<!-- //header -->
<!-- top-header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li class="top_link"><a href="#"><?php echo $email_id;?></a></li>|
				</ul>
			</div>
			<div class="top_left">
				<ul>
					
					<li class="top_link"><a href="logout.php">logout</a></li>					
				</ul>
                
                
                
                
                
                <ul>
					<li class="top_link"><a href="editprofile.php">Edit Profile:</a></li>|
					<li class="top_link"><a href="feedback.php">Feedback</a></li>					
                    <li class="top_link"><a href="serviceprovider.php">service provider</a></li>					
				</ul>
                
                
                
                
                
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- top-header -->
<!-- logo-cart -->
<div class="header_top">
	<div class="container">
		<div class="logo">
		 	<a href="index.php">Party planners</a>			 
		</div>
		<div class="header_right">
			<div class="cart box_1">
				
				<div class="clearfix"> </div>
			</div>				 
		</div>
		<div class="clearfix"></div>	
	</div>
</div>
<!-- //logo-cart -->
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.php">Home</a></li>
            
            <li><a class="color1" href="event.php">event</a></li>
			<li><a class="color1" href="gallery.php">gallery</a></li>
            
            <li><a class="color1" href="changepassword.php">change password</a></li>
           
                        <li><a class="color1" href="query.php">query</a></li>

             <li><a class="color1" href="userrequrement.php">user requrement</a></li>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             

            <div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			</div>
			</li>								
		</ul> 
			<div class="search">
				 <form method="GET" action="search.php">
					<input type="text" name="search" value="" placeholder="Search event...">
					<input type="submit" name="submit" value="">
					</form>
			</div>
			<div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<!-- banner -->
	<link rel="stylesheet" type="text/css" href="engine2/style.css" />
	<script type="text/javascript" src="engine2/jquery.js"></script>
    
    
        
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>

        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="css/popuplogin.css" />


		
        
        <!-- Webfont style sheet -->
        
    
    
    
    
    
    <div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data2/images/2.jpg" alt="" title="" id="wows1_2"/></li>
        <li><img src="data2/images/3.jpg" alt="" title="" id="wows1_2"/></li>
        <li><img src="data2/images/4.jpg" alt="" title="" id="wows1_2"/></li>
        <li><img src="data2/images/5.jpg" alt="" title="" id="wows1_2"/></li>
		
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" ><span><img src="data2/tooltips/untitled.png" alt="compose_ad_here"/>1</span></a>
		<a href="#" title="Digital_Newspaper_Holder"><span><img src="data2/tooltips/digital_newspaper_holder.jpg" alt="Digital_Newspaper_Holder"/>2</span></a>
		<a href="#" title="GMLI-Banner-Ad-Your-Ad-Here1"><span><img src="data2/tooltips/gmlibanneradyouradhere1.jpg" alt="GMLI-Banner-Ad-Your-Ad-Here1"/>3</span></a>
		<a href="#" title="lonas_gran_formato"><span><img src="data2/tooltips/lonas_gran_formato.jpg" alt="lonas_gran_formato"/>4</span></a>
		<a href="#" title="Advertise-here-B"><span><img src="data2/tooltips/advertisehereb.jpg" alt="Advertise-here-B"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">slider javascript</a> by WOWSlider.com v7.6</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine2/wowslider.js"></script>
	<script type="text/javascript" src="engine2/script.js"></script>
<!---->
<!-- banner -->
	