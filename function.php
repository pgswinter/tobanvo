<?php

// SOCK RECORD ********************************************************************************************
// SOCK RECORD ********************************************************************************************
// SOCK RECORD ********************************************************************************************

	function select_sock(){

		$sql_select_sock = "SELECT * from sock";
		$sql_select_sock_rs = $consql_new->query($sql_select_sock);

		$row_select_sock = $sql_select_sock_rs->fetch_assoc();

		return $row_select_sock;

	};

	function update_sock($id_sock,
						$name,
						$img,
						$like,
						$feedback,
						$made_in,
						$price,
						$date_started,
						$date_verified,
						$size,
						$colour,
						$quantity,
						$fashion_id,
						$id_customer,
						$id_sock_type){

		$sql_update_sock = "UPDATE sock SET 
							`name`='$name',
							`img`='$img',
							`like`='$like',
							`feedback`='$feedback',
							`made_in`='$made_in',
							`price`='$price',
							`date_started`='$date_started',
							`date_verified`='$date_verified',
							`size`='$size',
							`colour`='$colour',
							`quantity`='$quantity',
							`fashion_id`='$fashion_id',
							`id_customer`='$id_customer',
							`id_sock_type`='$id_sock_type'
							WHERE `id_sock`='$id_sock'";
		$sql_update_sock_rs = $consql_new->query($sql_update_sock);

	};

	function delete_sock($id_sock){

		$sql_delete_sock = "DELETE FROM `sock` WHERE `id_sock`='$id_sock'";
		$sql_delete_sock_rs = $consql_new->query($sql_delete_sock);

	};

// CUSTOMER RECORD ********************************************************************************************
// CUSTOMER RECORD ********************************************************************************************
// CUSTOMER RECORD ********************************************************************************************

	function select_customer(){

		$sql_select_customer= "SELECT * from customer";
		$sql_select_customer_rs = $consql_new->query($sql_select_customer);

		$row_select_customer = $sql_select_customer_rs->fetch_assoc();

	};
	function update_customer($id_customer,
						$first_name,
						$last_name,
						$email,
						$telephone,
						$address,
						$city,
						$country,
						$provide_code,
						$id_sock_type,
						$id_sock,
						$fashion_id,
						$id_gender){

		$sql_select_customer = "UPDATE customer SET
							 `first_name`='$first_name',
							 `last_name`='$last_name',
							 `email`='$email',
							 `telephone`='$telephone',
							 `address`='$address',
							 `city`='$city',
							 `country`='$country',
							 `provide_code`='$provide_code',
							 `id_sock_type`='$id_sock_type',
							 `id_sock`='$id_sock',
							 `fashion_id`='$fashion_id',
							 `id_gender`='$id_gender',
							 WHERE 
							 `id_customer`='$id_customer'";
		$sql_select_customer_rs = $consql_new->query($sql_select_customer);

	};
	function delete_customer($id_customer){

		$sql_delele_customer = "DELETE FROM customer where `id_customer`='$id_customer'";
		$sql_delele_customer_rs = $consql_new->query($sql_delele_customer);

	};

// FASHION TYPE RECORD ********************************************************************************************
// FASHION TYPE RECORD ********************************************************************************************
// FASHION TYPE RECORD ********************************************************************************************

	function select_fashion_type(){

		$sql_select_fashion_type= "SELECT * from fashion_type";
		$sql_select_fashion_type_rs = $consql_new->query($sql_select_fashion_type);

		$row_select_fashion_type = $sql_select_fashion_type_rs->fetch_assoc();

	};
	function update_fashion_type($fashion_id,
						$fashion_name,
						$fashion_icon,
						$id_project,
						$id_collection,
						$id_sock,
						$id_customer){

		$sql_select_fashion_type = "UPDATE fashion_type SET
							 `fashion_name`='$fashion_name',
							 `fashion_icon`='$fashion_icon',
							 `id_project`='$id_project',
							 `id_collection`='$id_collection',
							 `id_customer`='$id_customer'
							 WHERE 
							 `fashion_id`='$fashion_id'";
		$sql_select_fashion_type_rs = $consql_new->query($sql_select_fashion_type);

	};
	function delete_fashion_type($fashion_id){

		$sql_delele_fashion_type = "DELETE FROM fashion_type where `fashion_id`='$fashion_id'";
		$sql_delele_fashion_type_rs = $consql_new->query($sql_delele_fashion_type);

	};

// SOCK TYPE RECORD ********************************************************************************************
// SOCK TYPE RECORD ********************************************************************************************
// SOCK TYPE RECORD ********************************************************************************************

	function select_sock_type(){

		$sql_select_sock_type= "SELECT * from sock_type";
		$sql_select_sock_type_rs = $consql_new->query($sql_select_sock_type);

		$row_select_sock_type = $sql_select_sock_type_rs->fetch_assoc();

	};
	function update_sock_type($id_sock_type,
						$name_sock_type,
						$id_sock,
						$id_customer){

		$sql_select_sock_type = "UPDATE sock_type SET
							 `name_sock_type`='$name_sock_type',
							 `id_sock`='$id_sock',
							 `id_customer`='$id_customer'
							 WHERE 
							 `id_sock_type`='$id_sock_type'";
		$sql_select_sock_type_rs = $consql_new->query($sql_select_sock_type);

	};
	function delete_sock_type($id_sock_type){

		$sql_delele_sock_type = "DELETE FROM sock_type where `id_sock_type`='$id_sock_type'";
		$sql_delele_sock_type_rs = $consql_new->query($sql_delele_sock_type);

	};

// GENDER RECORD ********************************************************************************************
// GENDER RECORD ********************************************************************************************
// GENDER RECORD ********************************************************************************************

	function select_gender(){

		$sql_select_gender= "SELECT * from gender";
		$sql_select_gender_rs = $consql_new->query($sql_select_gender);

		$row_select_gender = $sql_select_gender_rs->fetch_assoc();

	};
	function update_gender($id_gender,
						$gender,
						$id_sock,
						$id_customer,
						$id_collection,
						$id_project){

		$sql_select_gender = "UPDATE gender SET
							 `name_gender`='$name_gender',
							 `id_sock`='$id_sock',
							 `id_customer`='$id_customer',
							 `id_collection`='$id_collection',
							 `id_project`='$id_project',
							 WHERE 
							 `id_gender`='$id_gender'";
		$sql_select_gender_rs = $consql_new->query($sql_select_gender);

	};
	function delete_gender($id_gender){

		$sql_delele_gender = "DELETE FROM gender where `id_gender`='$id_gender'";
		$sql_delele_gender_rs = $consql_new->query($sql_delele_gender);

	};

// COLLECTION RECORD ********************************************************************************************
// COLLECTION RECORD ********************************************************************************************
// COLLECTION RECORD ********************************************************************************************

	function select_collection(){

		$sql_select_collection= "SELECT * from collection";
		$sql_select_collection_rs = $consql_new->query($sql_select_collection);

		$row_select_collection = $sql_select_collection_rs->fetch_assoc();

	};
	function update_collection($id_collection,
						$collection,
						$fashion_id,
						$id_gender){

		$sql_select_collection = "UPDATE collection SET
							 `collection`='$collection',
							 `fashion_id`='$fashion_id',
							 `id_gender`='$id_gender',
							 WHERE 
							 `id_collection`='$id_collection'";
		$sql_select_collection_rs = $consql_new->query($sql_select_collection);

	};
	function delete_collection($id_collection){

		$sql_delele_collection = "DELETE FROM collection where `id_collection`='$id_collection'";
		$sql_delele_collection_rs = $consql_new->query($sql_delele_collection);

	};

// PROJECT RECORD ********************************************************************************************
// PROJECT RECORD ********************************************************************************************
// PROJECT RECORD ********************************************************************************************

	function select_project(){

		$sql_select_project= "SELECT * from project";
		$sql_select_project_rs = $consql_new->query($sql_select_project);

		$row_select_project = $sql_select_project_rs->fetch_assoc();

	};
	function update_project($id_project,
						$project,
						$fashion_id,
						$id_gender){

		$sql_select_project = "UPDATE project SET
							 `project`='$project',
							 `fashion_id`='$fashion_id',
							 `id_gender`='$id_gender',
							 WHERE 
							 `id_project`='$id_project'";
		$sql_select_project_rs = $consql_new->query($sql_select_project);

	};
	function delete_project($id_project){

		$sql_delele_project = "DELETE FROM project where `id_project`='$id_project'";
		$sql_delele_project_rs = $consql_new->query($sql_delele_project);

	};

?>