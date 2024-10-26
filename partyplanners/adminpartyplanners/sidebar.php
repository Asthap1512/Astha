
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<!-- charts -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<link rel="stylesheet" href="css/morris.css">
<!-- //charts -->
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
            
            
            <li>
				<a href="event.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					event
					</span>
				</a>
			</li>
            
            
            <li>
				<a href="contact.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					contact
					</span>
				</a>
			</li>
            
            <li>
				<a href="serviceprovider.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					serviceprovider
					</span>
				</a>
			</li>
            
            <li>
				<a href="user.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					user
					</span>
				</a>
			</li>
            
            <li>
				<a href="gallery.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					gallery
					</span>
				</a>
			</li>
            <li>
            <a href="feedback.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					feedback
					</span>
				</a>
			</li>
            
                        <li>
            <a href="booking.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					booking
					</span>
				</a>
			</li>
            
             <li>
            <a href="payment.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					mange event payment
					</span>
				</a>
			</li>
            
              <li>
            <a href="query.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					mange query
					</span>
				</a>
			</li>
            
              <li>
            <a href="ratting.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					mange rartting
					</span>
				</a>
			</li>
            
             <li>
            <a href="userrequrement.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					mange user requrement
					</span>
				</a>
			</li>


            
		<ul class="logout">
			<li>
			<a href="logout.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
