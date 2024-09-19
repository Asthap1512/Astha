<?php

include_once('model.php');   // step 1 load model 


class control extends model  // step 2 extends model class
{
	
	function __construct(){ // magic function call automatic when we declare class object
				
		model::__construct(); // step 3 call model __construct
				
		$url="45454";
		switch($url)
		{
			case '/admin-login':
				include_once('index.php');
			break;
			
			case '/dashboard':
				include_once('dashboard.php');
			break;
			
			case '/add_product':
				
				include_once('add_product.php');
			break;
			
			case '/manage_product':
				$prod_arr=$this->select('product');
				include_once('manage_product.php');
			break;
			
			case '/add_inquiry':
				include_once('add_inquiry.php');
			break;
			
			
			case '/manage_inquiry':
				$prod_arr=$this->select('inquiry');
				include_once('manage_inquiry.php');
			break;
			
			case '/Manage Team Member':
				$team_arr=$this->select('teammember');
				include_once('Manage Team Member.php');
			break;

			case '/Manage Reliable Brand':
				include_once('Manage Reliable Brand.php');
			break;

			case '/View Contact us':
				include_once('View Contact us.php');
			break;

			case '/Manage Feedback':
				include_once('Manage Feedback.php');
			break;

			
			default:
				include_once('');
			break;
		}
	}		
	
}
$obj= new control;

?>