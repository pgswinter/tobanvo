<?php

	session_start();
	require_once 'Facebook/autoload.php';
	$fb = new Facebook\Facebook([

		'app_id' => '1361256890611522',
		'app_secret' => '6a903474b03b212d92571636d90a9be4',
		'default_graph_version' => 'v2.8'

	]);
	$helper = $fb->getRedirectLoginHelper();

	try {
	  $accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // There was an error communicating with Graph
	  echo $e->getMessage();
	  exit;
	}

	if (isset($accessToken)) {
	  // User authenticated your app!
	  // Save the access token to a session and redirect
	  $_SESSION['facebook_access_token'] = (string) $accessToken;
	  // Log them into your web framework here . . .
	  // Redirect here . . .
	  header("Location: app/");
	  exit;
	} elseif ($helper->getError()) {
	  // The user denied the request
	  // You could log this data . . .
	  var_dump($helper->getError());
	  var_dump($helper->getErrorCode());
	  var_dump($helper->getErrorReason());
	  var_dump($helper->getErrorDescription());
	  // You could display a message to the user
	  // being all like, "What? You don't like me?"
	  exit;
	}

	// If they've gotten this far, they shouldn't be here
	http_response_code(400);
	exit;

?>