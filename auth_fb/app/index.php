<?php
	
	$consql_fw = mysqli_connect('166.62.27.147','whycannotaccess','221089abcdE%');
	$consql_fw->select_db('freedomwalkingteam');
    echo $consql_fw->error;

	session_start();
	require_once '../Facebook/autoload.php';
	$fb = new Facebook\Facebook([

		'app_id' => '1361256890611522',
		'app_secret' => '6a903474b03b212d92571636d90a9be4',
		'default_graph_version' => 'v2.8'

	]);

	$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

	try {
		$response = $fb->get('/me?fields=id,first_name,last_name,email,link,gender,locale,picture');
		$userNode = $response->getGraphUser();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	$id_fb = $userNode->getProperty('id');
	$first_name_fb = $userNode->getProperty('first_name');
	$last_name_fb = $userNode->getProperty('last_name');
	$email_fb = $userNode->getProperty('email');
	$link_fb = $userNode->getProperty('link');
	$gender_fb = $userNode->getProperty('gender');
	$locale_fb = $userNode->getProperty('locale');

	// Detecting email if it already existed
	$search = "SELECT email FROM user_fb WHERE email='".$email_fb."'";
    $search_rs = $consql_fw->query($search);
	$row_search = $search_rs->fetch_assoc();

	if($row_search > 0){

		header("location: http://freedomwalking.org/tobanvo/?welcome_back=".$last_name_fb."&your_protect_number=".$id_fb."");
		
	}
	else{

		$image_fb = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=40';

		$sql_insert_facebook = "INSERT INTO `user_fb` (
										`oauth_provider`,
										`oauth_uid`,
										`first_name`,
										`last_name`,
										`email`,
										`gender`,
										`locale`,
										`picture`,
										`link`,
										`created`,
										`modified`)
								VALUES ('facebook',
										'$id_fb',
										'$first_name_fb',
										'$last_name_fb',
										'$email_fb',
										'$gender_fb',
										'$locale_fb',
										'$image_fb',
										'$link_fb',
										'".date("Y-m-d H:i:s")."',
										'".date("Y-m-d H:i:s")."')";

		$consql_fw->query($sql_insert_facebook);

		echo $consql_fw->error;

		header("location: http://freedomwalking.org/tobanvo/?welcome_back=".$last_name_fb."&your_protect_number=".$id_fb."");

	}
	
	
?>