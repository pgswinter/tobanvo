<?php include("../../conndb_tbv.php");?>
<?php include("nav_admin.php");?>
<?php

	session_start();

	$url_check_admin = $_SERVER['QUERY_STRING'];
	$str_check_admin = "welcome_back=".$_SESSION['login_user']."&your_protect_number=".md5($_SESSION['login_user'])."";

	$pos_admin = strpos($url_check_admin, $str_check_admin);// Check user was logined or not yet

	$user_check = $_SESSION['login_user'];

	if(isset($_SESSION['login_user'])){

		$sql_check_normal_user = "SELECT * from `user` where username = '$user_check'";
		$sql_check_normal_user_rs = $consql_new->query($sql_check_normal_user);
		$row = $sql_check_normal_user_rs->fetch_assoc();

		echo $consql_new->error;

		if($row['priority'] != 1){

			foreach ($table_name_block as $key => $value) {
				if($admin_page==$key){

					session_destroy();
					header("location: signin");

				}
			}

		}
	}

	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator - Freedom Walking Studio</title>

	<link rel="stylesheet" href="../../../font/HelveticaNeueLTPro-Lt/font.css">
	<link rel="stylesheet" href="../../../font/HelveticaNeueLTPro-Roman/font.css">	
	<link rel="stylesheet" href="../../../font/HelveticaNeueLTPro-BlkCn/font.css">
	<link rel="shortcut icon" href="../../favicon.png" />

	<!-- vendor -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- From css fw-kit -->
	<link rel="stylesheet" href="../../../dist/css/fw-left-right.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
</head>
<body>

	<div class="fw-left-right">

		<div class="fw-left">
			
			<a href="signout/index.php"><img src="../../../img/logo.png" alt=""></a>
			<?php if($pos_admin === false):?>
				
			<?php else:?>
				<ul>

					<?php foreach($table_name_admin as $key => $value):?>
						<li <?php if($admin_page == $key):?>class="active"<?php endif;?>><a href="./?admin_page=<?php echo $key;?>&<?php echo $str_check_admin;?>"><?php echo $value;?></a></li>
					<?php endforeach;?>

				</ul>
			<?php endif;?>
		
		</div>

		<div class="fw-right">
			
			<?php if($pos_admin === false):?>

			<?php else:?>
				<label for="" class="rnd-btn user-check">Hello, <?php echo $_SESSION['login_user'];?>!</label>		
				<a href="signout" class="rnd-btn sign-out-btn">Sign out</a>
				<?php include('task/' . $admin_page . '/index.php');?>
			<?php endif;?>
			
		</div>
	</div>
	
	<!-- Include JS file. -->
	<script>

	    $('#name_sock_type').change(function(){
	     	
	        $('.sock_type_render').val($(this).val())
	        
	    });
		
	</script>
	
</body>
</html>