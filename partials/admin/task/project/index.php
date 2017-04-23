<?php

	// Get from index. Session username
	$login_user_id = $row['id'];

	$sql_blog = "SELECT * from `blog`";
	$sql_blog_rs = $consql_new->query($sql_blog);

	$sql_blog_id = "SELECT * from `blog` where `id`='$login_user_id'";
	$sql_blog_id_rs = $consql_new->query($sql_blog_id);

	$sql_busi = "SELECT * from `business_type`";
	$sql_busi_rs = $consql_new->query($sql_busi);

	$sql_social_link = "SELECT * from `social_link`";
	$sql_social_link_rs = $consql_new->query($sql_social_link);

	if(isset($_POST['for_insert'])){

		$id_busi_type = $consql_new->real_escape_string($_POST['insr_id_busi']);
		$id_link = $consql_new->real_escape_string($_POST['insr_id_link']);
		$title = $consql_new->real_escape_string($_POST['insr_titl']);
		$date = $consql_new->real_escape_string($_POST['insr_date']);
		$like = $consql_new->real_escape_string($_POST['insr_like']);
		$author = $consql_new->real_escape_string($_POST['insr_auth']);
		$img_blog = $consql_new->real_escape_string($_POST['insr_img_blog']);
		$content = $consql_new->real_escape_string($_POST['insr_content']);
		$id = $consql_new->real_escape_string($_POST['insr_id']);

		$sql_insert_blog = "INSERT INTO `blog` (
									`title`,
									`date`,
									`like`,
									`author`,
									`img_blog`,
									`content`,
									`id_busi_type`,
									`id_link`,
									`id`)
							VALUES ('$title',
									'$date',
									'$like',
									'$author',
									'$img_blog',
									'$content',
									'$id_busi_type',
									'$id_link',
									'$id')";

		$consql_new->query($sql_insert_blog);

		echo $consql_new->error;
		header("location: ?admin_page=blog&".$str_check_admin."");
	}

	if(isset($_POST['for_update'])){

		$manage_id_blog = $consql_new->real_escape_string($_POST['manage_id_blog']);
		$title = $consql_new->real_escape_string($_POST['titl']);
		$date = $consql_new->real_escape_string($_POST['date']);
		$like = $consql_new->real_escape_string($_POST['like']);
		$author = $consql_new->real_escape_string($_POST['auth']);
		$img_blog = $consql_new->real_escape_string($_POST['img_blog']);
		$content = $consql_new->real_escape_string($_POST['content']);

		$sql_update_blog = "UPDATE `blog` SET 
												`title`='$title',
												`date`='$date',
												`like`='$like',
												`comment`='$comment',
												`author`='$author',
												`img_blog`='$img_blog',
												`content`='$content'
												WHERE 
												`id_blog`='$manage_id_blog'";
		$consql_new->query($sql_update_blog);

		echo $consql_new->error;
		header("location: ?admin_page=blog&".$str_check_admin."");
		
	}

	if(isset($_POST['for_delete'])){

		$manage_id_blog = $consql_new->real_escape_string($_POST['manage_id_blog']);
		$manage_id_busi_type = $consql_new->real_escape_string($_POST['manage_id_busi_type']);
		$manage_id_link = $consql_new->real_escape_string($_POST['manage_id_link']);

		$sql_delete_blog = "DELETE FROM `blog` WHERE `id_blog`='$manage_id_blog' 
														AND `id_busi_type`='$manage_id_busi_type'
														AND `id_link`='$manage_id_link'";
		$consql_new->query($sql_delete_blog);

		echo $consql_new->error;

	}

	if(isset($_POST['for_update_id'])){

		$manage_id_blog_del_ss = $consql_new->real_escape_string($_POST['manage_id_blog_del_ss']);
		$title_id = $consql_new->real_escape_string($_POST['titl_id']);
		$date_id = $consql_new->real_escape_string($_POST['date_id']);
		$like_id = $consql_new->real_escape_string($_POST['like_id']);
		$author_id = $consql_new->real_escape_string($_POST['auth_id']);
		$img_blog_id = $consql_new->real_escape_string($_POST['img_blog_id']);
		$content_id = $consql_new->real_escape_string($_POST['content_id']);

		$sql_update_blog_id = "UPDATE `blog` SET 
												`title`='$title_id',
												`date`='$date_id',
												`like`='$like_id',
												`author`='$author_id',
												`img_blog`='$img_blog_id',
												`content`='$content_id'
												WHERE 
												`id_blog`='$manage_id_blog_del_ss'";
		$consql_new->query($sql_update_blog_id);

		echo $consql_new->error;
		header("location: ?admin_page=blog&".$str_check_admin."");
		
	}

	if(isset($_POST['for_delete_id'])){

		$manage_id_blog_del_ss = $consql_new->real_escape_string($_POST['manage_id_blog_del_ss']);
		$manage_id_busi_type_del_ss = $consql_new->real_escape_string($_POST['manage_id_busi_type_del_ss']);
		$manage_id_link_del_ss = $consql_new->real_escape_string($_POST['manage_id_link_del_ss']);

		$sql_delete_blog_ss = "DELETE FROM `blog` WHERE `id_blog`='$manage_id_blog_del_ss' 
														AND `id_busi_type`='$manage_id_busi_type_del_ss'
														AND `id_link`='$manage_id_link_del_ss'";
		$consql_new->query($sql_delete_blog_ss);

		echo $consql_new->error;
		header("location: ?admin_page=blog&".$str_check_admin."");
	}
	
?>
<body>
	
			
	<h2>New Article for Blog</h2>
	<article>
		<form action="" method="POST">
			<div class="clear-float">
				<input type="submit" value="+ Add" name="for_insert">
			</div>
			</br>
			<div class="form-inli col-lg-6">
				<label for="">Select Business Type</label>
				<select name="name_busi_slct" id="name_busi_slct">
					<?php while($row_busi = $sql_busi_rs->fetch_assoc()):?>
						<option value="<?php echo $row_busi['id_busi_type'];?>"><?php echo $row_busi['name_busi'];?></option>
					<?php endwhile;?>
				</select>
			</div>
			<input type="hidden" placeholder="Typing data here ..." name="insr_id_busi" class="name_busi_render">
			<!-- <div class="form-inli col-lg-6">
				<label for="">Select facebook link( just put 2 )</label>
				<select name="id_link_slct" id="id_link_slct">
					<?php //while($row_social_link = $sql_social_link_rs->fetch_assoc()):?>
						<option value="<?php //echo $row_social_link['id_link'];?>"><?php //echo $row_social_link['id_link'];?></option>
					<?php //endwhile;?>
				</select>
			</div> -->
			<input type="hidden" placeholder="Typing data here ..." name="insr_id_link" class="id_link_render" value="2">
			<div class="form-inli col-lg-6">
				<label for="">Title</label>
				<input type="text" placeholder="Typing data here ..." name="insr_titl">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Date</label>
				<input type="text" placeholder="Typing data here ..." name="insr_date">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Like</label>
				<input type="text" placeholder="Typing data here ..." name="insr_like">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">Author</label>
				<input type="text" placeholder="Typing data here ..." name="insr_auth">
			</div>
			<div class="form-inli col-lg-6">
				<label for="">IMG Url</label>
				<input type="text" placeholder="Typing data here ..." name="insr_img_blog">
			</div>
			
			<div class="form-inli col-lg-12">
				<label for="">Content</label>
				<textarea id="froala-editor" name="insr_content"></textarea>
				<br/>
			</div>
			<input type="hidden" placeholder="Typing data here ..." name="insr_id"  value="<?php echo $login_user_id;?>">

			
		</form>
	</article>
	<h2>Update Blog</h2>
	<!-- Update based on priority -->
	<!-- PRIORITY ADMIN -->
	<?php if($row['priority'] == 1):?>
		<?php while($row_blog = $sql_blog_rs->fetch_assoc()):?>
			<h3>ID Blog: <?php echo $row_blog['id_blog'];?></h3>
			<article>
				<form action="" method="POST">
					
					<div class="clear-float">
						<input type="submit" value="Update" name="for_update">
						<input type="submit" value="Delete" name="for_delete">
					</div>
					</br>
					<input type="hidden" value="<?php echo $row_blog['id_blog'];?>" name="manage_id_blog">
					<input type="hidden" value="<?php echo $row_blog['id_busi_type'];?>" name="manage_id_busi_type">
					<input type="hidden" value="<?php echo $row_blog['id_link'];?>" name="manage_id_link">
					<div class="form-inli col-lg-6">
						<label for="">Title</label>
						<input type="text" value="<?php echo $row_blog['title'];?>" name="titl">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">Date Finished</label>
						<input type="text" value="<?php echo $row_blog['date'];?>" name="date">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">Date Started</label>
						<input type="text" value="<?php echo $row_blog['like'];?>" name="like">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">Author</label>
						<input type="text" value="<?php echo $row_blog['author'];?>" name="auth">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">IMG Url</label>
						<input type="text" value="<?php echo $row_blog['img_blog'];?>" name="img_blog">
					</div>
					<div class="form-inli col-lg-12">
						<label for="">Content</label>
						<textarea id="froala-editor-update-admin" class="froala-editor-update" name="content"><?php echo $row_blog['content'];?></textarea>
						
					</div>

				</form>
			</article>
		<?php endwhile;?>
	
	<!-- PRIORITY USER -->
	<?php elseif($row['priority'] == 5 || $row['priority'] == 2):?>
		<?php while($row_blog_id = $sql_blog_id_rs->fetch_assoc()):?>
			<h3>ID Blog: <?php echo $row_blog_id['id_blog'];?></h3>
			<article>
				<form action="" method="POST">
					
					<div class="clear-float">
						<input type="submit" value="Update" name="for_update_id">
						<input type="submit" value="Delete" name="for_delete_id">
					</div>
					</br>
					<input type="hidden" value="<?php echo $row_blog_id['id_blog'];?>" name="manage_id_blog_del_ss">
					<input type="hidden" value="<?php echo $row_blog_id['id_busi_type'];?>" name="manage_id_busi_type_del_ss">
					<input type="hidden" value="<?php echo $row_blog_id['id_link'];?>" name="manage_id_link_del_ss">
					<div class="form-inli col-lg-6">
						<label for="">Title</label>
						<input type="text" value="<?php echo $row_blog_id['title'];?>" name="titl_id">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">Date Finished</label>
						<input type="text" value="<?php echo $row_blog_id['date'];?>" name="date_id">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">Date Started</label>
						<input type="text" value="<?php echo $row_blog_id['like'];?>" name="like_id">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">Author</label>
						<input type="text" value="<?php echo $row_blog_id['author'];?>" name="auth_id">
					</div>
					<div class="form-inli col-lg-6">
						<label for="">IMG Url</label>
						<input type="text" value="<?php echo $row_blog_id['img_blog'];?>" name="img_blog_id">
					</div>
					<div class="form-inli col-lg-12">
						<label for="">Content</label>
						<textarea id="froala-editor-update-user" class="froala-editor-update" name="content_id"><?php echo $row_blog_id['content'];?></textarea>
						
					</div>

				</form>
			</article>
		<?php endwhile;?>
	<?php endif;?>
</body>
</html>