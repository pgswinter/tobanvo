<?php include('conndb_tbv.php');?>
<?php include('nav.php');?>
<?php 
	
	session_start();
	$url_check = $_SERVER['QUERY_STRING'];
	// Facebook Login -------------------------------------------------
	// ------------------------------------------------------------------------------------------

		// FETCH PHOTOS FROM FACEBOOK
		//$id_album_fb = '2211099535557';

		$str_check_fb = " ";
		if((isset($_SESSION['facebook_access_token']))){

			require_once 'auth_fb/Facebook/autoload.php';
			$fb = new Facebook\Facebook([

				'app_id' => '1361256890611522',
				'app_secret' => '6a903474b03b212d92571636d90a9be4',
				'default_graph_version' => 'v2.8'

			]);

			$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);

			try {

				// $tags_request = $fb->get('/582429421910694/tags?fields=name,created_time');
				// $tags = $tags_request->getGraphEdge()->asArray();

				// $likes_request = $fb->get('/582429421910694/likes?fields=total_count');
				// $likes = $likes_request->getGraphEdge()->asArray();				

				// $page_request = $fb->get('/me/accounts?fields=id,name');
				// $pages = $page_request->getGraphEdge()->asArray();

				// $album_request = $fb->get('/me/albums?fields=id');
				// $albums = $album_request->getGraphEdge()->asArray();

				$album_request = $fb->get('/164206153733025/albums?fields=id,name');
				$albums = $album_request->getGraphEdge()->asArray();

				$response = $fb->get('/me?fields=first_name,last_name,photos');
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
			// Get Full Name Facebook
			$first_name_fb = $userNode->getProperty('first_name');
			$last_name_fb = $userNode->getProperty('last_name');
			// Get IMG Facebook
			$image_fb = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=40';

			$str_check_fb = "welcome_back=".$userNode->getProperty('last_name')."&your_protect_number=".$userNode->getProperty('id')."";
			
		}
		$pos_fb = strpos($url_check, $str_check_fb);// Check user_fb was logined or not yet
	// ------------------------------------------------------------------------------------------
	// End Facebook Login ---------------------------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>TOBANVO Store</title>

	<link rel="stylesheet" href="font/HelveticaNeueLTPro-Lt/font.css">
	<link rel="stylesheet" href="font/HelveticaNeueLTPro-Roman/font.css">	
	<link rel="stylesheet" href="font/HelveticaNeueLTPro-BlkCn/font.css">
	<link rel="shortcut icon" href="favicon.jpg" />

	<!-- vendor -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- From css fw-kit -->
	<link rel="stylesheet" href="dist/css/tobanvo/style.css">
	<link rel="stylesheet" href="dist/css/tobanvo/animation.css">
	<link rel="stylesheet" href="dist/css/tobanvo/fw-social.css">
	<link rel="stylesheet" href="dist/css/tobanvo/tuananh-responsive.css">
	<link rel="stylesheet" href="dist/css/tobanvo/subject.css">
	<!-- Include Editor style. -->
	<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
	<link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.4.0/css/froala_style.min.css' rel='stylesheet' type='text/css' />
	<!-- Plugins Editor -->
	<link rel="stylesheet" href="vendor/froala/css/plugins/image.min.css">
	
</head>
<body>
	
	<!-- <?php //foreach($tags as $tag):?>
		<?php
			//$a = $tag['name'];
			//if (strpos($a, 'price') !== false) {
				//$b = strstr($tag['name'],':');
			    //echo str_replace(': ','',$b);
			// }
		?>
	<?php //endforeach;?> -->

	<?php if($pos_fb === false):?>
		<div class="fw-tbv-social col-lg-4">
			
			<a class="col-lg-4" href="http://freedomwalking.org/tobanvo/auth_fb/log_out">Sign In</a>

		</div>
		
	<?php else:?>
		<div class="fw-tbv-social col-lg-4">
			
			<a class="col-lg-4" href="http://freedomwalking.org/tobanvo/"> | Sign Out</a>
			<img class="col-lg-4" class="logo" src="<?php echo $image_fb;?>" alt="">
			<label class="col-lg-3" for=""><?php echo ''.$first_name_fb.' '.$last_name_fb.'';?></label>

		</div>
	<?php endif;?>
	<div class="qn-wrapper two-rows shop">
		<div class="qn-left">
			<div class="logo">
				<div class="toggle-menu-button-closed hide">+</div>
				<div class="toggle-menu-button-open">+</div>
				<a href="http://freedomwalking.org/tobanvo/"></a>
			</div>
			<?php include('./partials/' . $page . '/index.php');?>	
			
	</div> 
	<footer>
		<div class="fl">
			<p>Copyright © 2017 TOBANVO Store. All right reserved.</p>
		</div>
		<div class="fr">
			<p>Follow us via <a href="http://www.facebook.com/tobanvo">Facebook</a>. A product of Freedom Walking Studio.</p>
		</div>
		<div class="clear"></div>
	</footer>
	<div class="black-bg"></div>
	<div class="closed"></div>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="dist/js/tuananh.js"></script>
	<script src="dist/js/tuananh-gallery.js"></script>
	<script src="dist/js/jquery.lazyload.min.js"></script>
	<script>
		$(function() {          
		    $("img.lazy").lazyload({
		        effect : "fadeIn"
		    });
		}); 
		 $('#gender').change(function(){
	     	
	        $('.gender_render').val($(this).val())
	        
	    });
	</script>

</body>
</html>