<?php

	session_start();
	require_once 'Facebook/autoload.php';
	$fb = new Facebook\Facebook([

		'app_id' => '1361256890611522',
		'app_secret' => '6a903474b03b212d92571636d90a9be4',
		'default_graph_version' => 'v2.8'

	]);

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email', 'user_likes', 'user_photos','manage_pages','user_tagged_places','user_likes']; // optional
	$callback = 'http://freedomwalking.org/tobanvo/auth_fb/fb-callback.php';
	$loginUrl = $helper->getLoginUrl($callback, $permissions);

	// header('Location: '.$loginUrl.'');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to TOBANVO Store</title>
	<link rel="shortcut icon" href="images/logo.png">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="../font/HelveticaNeueLTPro-Lt/font.css">
	<link rel="stylesheet" href="../font/HelveticaNeueLTPro-Roman/font.css">	
	<link rel="stylesheet" href="../font/HelveticaNeueLTPro-BlkCn/font.css">
	<link rel="shortcut icon" href="../favicon.jpg" />


	<link rel="stylesheet" href="../dist/css/tobanvo/style.css">
	<link rel="stylesheet" href="../dist/css/tobanvo/animation.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body class="shorter-screen">
	<div class="to-main">
		<a class="showroom" href="<?php echo $loginUrl;?>"></a>
	</div>
	<footer>
		<div class="fl">
			<p>Copyright © 2015 TOBANVO. All right reserved.</p>
		</div>
		<div class="fr">
			<p>Follow us via <a href="http://www.facebook.com/tobanvo">Facebook</a>.</p>
		</div>
		<div class="clear"></div>
	</footer>
	<script src="../dist/js/tobanvo/tuananh.js"></script>
</body>

</html>