<?php 
	
	$main_menu = array(

		"collection"=>"collection",
		"tobanvo"=>"TOBANVO",
		"join_event"=>"join event",
		"newsletter"=>"newsletter",
		"contact_us"=>"contact us",
		"buy_guide"=>"buy guide",
		"gift_card"=>"gift card",
		"synchronize"=>"synchronize"

	);

	$admin_nav = array(

		"login"=>"log in",
		"contact"=>"contact"

	);

	$social_nav = array(

		"instagram"=>"instagram",
		"facebook"=>"facebook",
		"twitter"=>"twitter",
		"pinterest"=>"pinterest",
		"youtube"=>"youtube",

	);

	if(isset($_GET['page'])){

		$page = $_GET['page'];

	}else{

		$page = 'tobanvo';

	}

?>