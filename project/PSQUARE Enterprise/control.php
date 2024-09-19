
<?php

class control{
	
	function __construct(){ // magic function call automatic when we declare class object
					
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/index':
				include_once('index.php');
			break;
			
			case '/about':
				include_once('about.php');
			break;
			
			case '/Product':
				include_once('Product.php');
			break;

			case '/Kraft paper':
				include_once('Kraft paper.php');
			break;
			
			case '/Corrugated Box':
				include_once('Corrugated Box.php');
			break;
			
			case '/Paper Beg':
				include_once('Paper Beg.php');
			break;
			
			case '/Corruation Roll':
				include_once('Corruation Roll.php');
			break;

			case '/A4 paper':
				include_once('A4 paper.php');
			break;
			
			case '/Straping Patti':
					
				include_once('Straping Patti.php');
			break;
			
			case '/Selotep':
				include_once('Selotep.php');
			break;
			
			case '/Strach Film':
				include_once('Strach Film.php');
			break;

			case '/Bubble Roll':
				include_once('Bubble Roll.php');
			break;

			case '/Inquiry us':
				include_once('Inquiry us.php');
			break;

			case '/contact':
				include_once('contact.php');
			break;
			
			default:
				include_once('404.php');
			break;
		}
		
	}
	
}

$obj=new control;

?>