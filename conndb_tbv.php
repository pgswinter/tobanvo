<?php
	
	$consql_new = mysqli_connect('166.62.27.147','whycannotaccess','221089abcdE%');
	$consql_new->select_db('freedomwalkingteam');
    echo $consql_new->error;

	$consql_wing = mysqli_connect('166.62.27.147','roberthost_admin','221089abcdE%');
	$consql_wing->select_db('freedomwing');
    echo $consql_wing->error;

?>