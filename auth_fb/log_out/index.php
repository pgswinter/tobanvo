<?php 
	
	session_start();
	if(session_destroy()){

		header("location: http://freedomwalking.org/tobanvo/auth_fb");

	}

?>