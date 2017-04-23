<?php
	
	$table_name_admin = array(

		"collection"=>"collection",
		"customer"=>"customer",
		"fashion_type"=>"Fashion Type",
		"gender"=>"gender",
		"sock"=>"sock",
		"sock_type"=>"Sock Type",
		"project"=>"project"

	);

	if(isset($_GET['admin_page'])){

		$admin_page = $_GET['admin_page'];

	}else{

		$admin_page = 'sock';

	}

?>