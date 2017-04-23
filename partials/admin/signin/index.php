<?php include('../../../conndb_tbv.php');?>
<?php 
	
	session_start();

	$error='';
	if(isset($_POST['for_login'])){

		if(empty($_POST['my_id']) || empty($_POST['my_pass'])){

			$error = "username or password can not blank, babe!";

		}
		else{

			$username = $_POST['my_id'];
			$password = $_POST['my_pass'];
			$username = stripcslashes($username);
			$password = stripcslashes($password);
			$username = $consql_new->real_escape_string($username);
			$password = $consql_new->real_escape_string($password);

			$password_check_hash = md5($password);	

			$sele_sql_login = "SELECT * FROM `user` WHERE `username` = '$username' and `password`= '$password_check_hash'";
			$selec_result_login = $consql_new->query($sele_sql_login);
			$row = $selec_result_login->fetch_assoc();
			if($row['username'] == $username && $row['password'] == $password_check_hash){

				$_SESSION['login_user'] = $username;

			}
			else{

				$error = "Username or Password is invalid, babe!";

			}

			echo $consql_new->error;
		}

	}

	$hash_login_admin = md5($_SESSION['login_user']);	

	if(isset($_SESSION['login_user'])){

		header('location: ../../admin/?admin_page=sock&welcome_back='.$_SESSION['login_user'].'&your_protect_number='.$hash_login_admin.'');

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator Log In - Freedom Walking Team</title>
	
	<!-- Freedom Walking Font -->
	<link rel="stylesheet" href="../../../font/NuevaStd-Bold/font.css">
	<link rel="stylesheet" href="../../../font/NuevaStd-BoldCond/font.css">
	<link rel="stylesheet" href="../../../font/NuevaStd-Cond/font.css">
	<link rel="stylesheet" href="../../../font/NuevaStd-Italic/font.css">

	<link rel="stylesheet" href="../../../font/HelveticaNeueLTPro-Lt/font.css">
	<link rel="stylesheet" href="../../../font/HelveticaNeueLTPro-Roman/font.css">	
	<link rel="stylesheet" href="../../../font/HelveticaNeueLTPro-BlkCn/font.css">

	<!-- vendor -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- From css fw-kit -->
	<link rel="stylesheet" href="../../../dist/css/fw-signin.css">

	<!-- Responsive CSS -->
	<link rel="stylesheet" href="../../../dist/css/responsive.css">
	
</head>
<body>
	
	<div class="fw-signin">
		<h1>freedomwlaking studio ADMIN</h1>
		<form action="" method="POST">
			
			<div class="form-wrap"><label for="">Usernamae</label><input type="text" name="my_id"></div>
			<div class="form-wrap"><label for="">Password</label><input type="password" name="my_pass"></div>

			<div class="form-wrap"><input type="submit" value="login" name="for_login"></div>
			<a href="../../../?page=home" class="rnd-btn back-btn">Back to Home</a>	
		</form>
		<label class="message" for=""><?php echo $error;?></label>
	</div>

</body>
</html>