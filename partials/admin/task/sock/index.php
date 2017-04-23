<?php
	
	$sql_sock = "SELECT * from `sock`";
	$sql_sock_rs = $consql_wing->query($sql_sock);

	$sql_fashion_type = "SELECT * from `fashion_type`";
	$sql_fashion_type_rs = $consql_wing->query($sql_fashion_type);

	$sql_customer = "SELECT * from `customer`";
	$sql_customer_rs = $consql_wing->query($sql_customer);

	$sql_sock_type_link = "SELECT * from `sock_type`";
	$sql_sock_type_rs = $consql_wing->query($sql_sock_type_link);

	if(isset($_POST['for_insert'])){

		$id_sock = $consql_wing->real_escape_string($_POST['insr_id_sock']);
		$id_fashion = $consql_wing->real_escape_string($_POST['insr_id_fashion']);
		$id_customer = $consql_wing->real_escape_string($_POST['insr_id_customer']);
		$id_sock_type = $consql_wing->real_escape_string($_POST['insr_id_sock_type']);
		$name = $consql_wing->real_escape_string($_POST['insr_name']);
		$url_img = './store/photos/'.$_FILES['insr_img']['name'];
		$made_in = $consql_wing->real_escape_string($_POST['insr_made_in']);
		$price = $consql_wing->real_escape_string($_POST['insr_price']);
		$size = $consql_wing->real_escape_string($_POST['insr_size']);
		$colour = $consql_wing->real_escape_string($_POST['insr_colour']);
		$quantity = $consql_wing->real_escape_string($_POST['insr_quantity']);

		if(isset($_FILES['insr_img'])){

			if($_FILES['insr_img']['error'] > 0){

				echo 'File error';

			}
			else{

				move_uploaded_file($_FILES['insr_img']['tmp_name'], $url_img);
	            echo 'File Uploaded';
	            $sql_insert_sock = "INSERT INTO `sock` (
									`id_sock`,
									`fashion_id`,
									`id_customer`,
									`id_sock_type`,
									`name`,
									`img`,
									`made_in`,
									`price`,
									`date_started`,
									`date_verified`,
									`size`,
									`colour`,
									`quantity`)
							VALUES ('$id_sock',
									'$id_fashion',
									'$id_customer',
									'$id_sock_type',
									'$name',
									'$url_img',
									'$made_in',
									'$price',
									'".date("Y-m-d H:i:s")."',
									'".date("Y-m-d H:i:s")."',
									'$size',
									'$colour',
									'$quantity')";

				$consql_wing->query($sql_insert_sock);

				echo $consql_wing->error;
				header("location: ?admin_page=sock&".$str_check_admin."");

			}

		}
		 else{
	        echo 'You did not select file upload';
	    }

		
	}

	if(isset($_POST['for_update'])){

		$id_sock = $consql_wing->real_escape_string($_POST['id_sock']);
		$id_fashion = $consql_wing->real_escape_string($_POST['id_fashion']);
		$id_customer = $consql_wing->real_escape_string($_POST['id_customer']);
		$id_sock_type = $consql_wing->real_escape_string($_POST['id_sock_type']);
		$name = $consql_wing->real_escape_string($_POST['name']);
		$url_img_update = './store/photos/'.$_FILES['update_img']['name'];
		$made_in = $consql_wing->real_escape_string($_POST['made_in']);
		$price = $consql_wing->real_escape_string($_POST['price']);
		$size = $consql_wing->real_escape_string($_POST['size']);
		$colour = $consql_wing->real_escape_string($_POST['colour']);
		$quantity = $consql_wing->real_escape_string($_POST['quantity']);

		$date_verified = date("Y-m-d H:i:s");

		if(isset($_FILES['update_img'])){

			if($_FILES['update_img']['error'] > 0){

				echo 'File error';
				$sql_update_sock = "UPDATE `sock` SET 
												`name`='$name',
												`img`='$url_img_update',
												`made_in`='$made_in',
												`price`='$price',
												`date_verified`= '$date_verified',
												`size`='$size',
												`colour`='$colour',
												`quantity`='$quantity'
												WHERE 
												`id_sock`='$id_sock'";
				$consql_wing->query($sql_update_sock);

				echo $consql_wing->error;
				header("location: ?admin_page=sock&".$str_check_admin."");

			}
			else{

				move_uploaded_file($_FILES['update_img']['tmp_name'], $url_img_update);					
				$sql_update_sock = "UPDATE `sock` SET 
												`name`='$name',
												`img`='$url_img_update',
												`made_in`='$made_in',
												`price`='$price',
												`date_verified`= '$date_verified',
												`size`='$size',
												`colour`='$colour',
												`quantity`='$quantity'
												WHERE 
												`id_sock`='$id_sock'";
				$consql_wing->query($sql_update_sock);

				echo $consql_wing->error;
				header("location: ?admin_page=sock&".$str_check_admin."");

			}

		}
		 else{
	        echo 'You did not select file upload';
	    }
		
	}

	if(isset($_POST['for_delete'])){

		$id_sock = $consql_wing->real_escape_string($_POST['id_sock']);
		$id_fashion = $consql_wing->real_escape_string($_POST['id_fashion']);
		$id_customer = $consql_wing->real_escape_string($_POST['id_customer']);
		$id_sock_type = $consql_wing->real_escape_string($_POST['id_sock_type']);

		$sql_delete_sock = "DELETE FROM `sock` WHERE `id_sock`='$id_sock' 
														AND `id_fashion`='$id_fashion'
														AND `id_customer`='$id_customer'
														AND `id_sock_type`='$id_sock_type'";
		$consql_wing->query($sql_delete_sock);

		echo $consql_wing->error;

	}

?>
<div>
	
			
	<h2>New Sock</h2>
	<article>
        
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="clear-float">
				<input type="submit" value="+ Add" name="for_insert">
			</div>
			</br>
			<input type="hidden" placeholder="Typing data here ..." name="insr_id_fashion" value="1">
			<input type="hidden" placeholder="Typing data here ..." name="insr_id_customer" value="1">

			<input type="hidden" placeholder="Typing data here ..." name="insr_id_sock_type" class="sock_type_render">
			<div class="form-inli col-lg-6">
				<label for="">Select Sock Type</label>
				<select name="name_busi_slct" id="name_sock_type">
					<?php while($row_sock_type = $sql_sock_type_rs->fetch_assoc()):?>
						<option value="<?php echo $row_sock_type['id_sock_type'];?>"><?php echo $row_sock_type['name_sock_type'];?></option>
					<?php endwhile;?>
				</select>
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Name</label>
				<input type="text" placeholder="Typing data here ..." name="insr_name">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">URL IMG</label>
				<input type="file" name="insr_img"/>
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Made in</label>
				<input type="text" placeholder="Typing data here ..." name="insr_made_in">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Price</label>
				<input type="text" placeholder="Typing data here ..." name="insr_price">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Size</label>
				<input type="text" placeholder="Typing data here ..." name="insr_size">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Colour</label>
				<input type="text" placeholder="Typing data here ..." name="insr_colour">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Quantity</label>
				<input type="text" placeholder="Typing data here ..." name="insr_quantity">
			</div>
			
		</form>
	</article>

	<h2>Update Sock</h2>
	<?php while($row_sock = $sql_sock_rs->fetch_assoc()):?>
		<h3>ID Sock: <?php echo $row_sock['id_sock'];?></h3>
		<article>
			<form action="" method="POST" enctype="multipart/form-data">
				
				<div class="clear-float">
					<input type="submit" value="Update" name="for_update">
					<input type="submit" value="Delete" name="for_delete">
				</div>
				</br>
				<input type="hidden" value="<?php echo $row_sock['id_sock'];?>" name="id_sock">
				<input type="hidden" value="<?php echo $row_sock['id_sock'];?>" name="id_fashion">
				<input type="hidden" value="<?php echo $row_sock['id_sock'];?>" name="id_customer">
				<input type="hidden" value="<?php echo $row_sock['id_sock'];?>" name="id_customer">

				<div class="form-inli col-lg-6">
					<label for="">Name</label>
					<input type="text" placeholder="Typing data here ..." name="name" value="<?php echo $row_sock['name'];?>">
				</div>
				<div class="form-inli col-lg-6">
					<img src="<?php echo $row_sock['img'];?>" alt="">
					<label for="">Upload</label>
					<input type="file" name="update_img">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Made in</label>
					<input type="text" placeholder="Typing data here ..." name="img_made_in" value="<?php echo $row_sock['made_in'];?>">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Price</label>
					<input type="text" placeholder="Typing data here ..." name="price" value="<?php echo $row_sock['price'];?>">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Date Started</label>
					<input type="text" placeholder="Typing data here ..." name="date_started">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Date Verified</label>
					<input type="text" placeholder="Typing data here ..." name="date_verified">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Size</label>
					<input type="text" placeholder="Typing data here ..." name="size" value="<?php echo $row_sock['size'];?>">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Colour</label>
					<input type="text" placeholder="Typing data here ..." name="colour" value="<?php echo $row_sock['colour'];?>">
				</div>
				<div class="form-inli col-lg-6">
					<label for="">Quantity</label>
					<input type="text" placeholder="Typing data here ..." name="quantity" value="<?php echo $row_sock['quantity'];?>">
				</div>
					
			</form>
		</article>
	<?php endwhile;?>
</div>
