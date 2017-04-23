<?php

		// foreach($albums as $album){

		// 	$request_album_name = $fb->get(''.$album['id'].'?fields=name');
		// 	$album_obj = $request_album_name->getGraphNode();

		// 	$photos_request = $fb->get(''.$album['id'].'/photos?fields=id,picture,name,likes,tags');
		// 	$photos = $photos_request->getGraphEdge()->asArray();
		// 	foreach($photos as $photo){

		// 		$img_detail = $photo['picture'];
		// 		$id_product = 1;
		// 		$img_id_fb = $photo['id'];

		// 		$collection = $album_obj->getProperty('name');
		// 		$id_fashion = 1;
		// 		$id_gender = 3;
		// 		$id_fb_collection = $album['id'];

		// 		$sql_insert_product_detail = "INSERT INTO `product_detail` (
		// 										`detail_img`,
		// 										`id_product`,
		// 										`id_img_fb`)
		// 								VALUES ('$img_detail',
		// 										'$id_product',
		// 										'$img_id_fb')";
										
		// 		$consql_wing->query($sql_insert_product_detail);

		// 		$sql_insert_collection = "INSERT INTO `collection` (
		// 										`collection`,
		// 										`fashion_id`,
		// 										`id_gender`,
		// 										`id_collection_fb`,
		// 										`id_fanpage`,
		// 										`name_fanpage`,
		// 										`id_product`)
		// 								VALUES ('$collection',
		// 										'$id_fashion',
		// 										'$id_gender',
		// 										'$id_fb_collection',
		// 										'164206153733025',
		// 										'Freedom Walking Shop',
		// 										'$id_product')";
		// 		$consql_wing->query($sql_insert_collection);											
		// 			echo $consql_wing->error;
		// 	}
		// }

		// foreach($albums as $album_2){

		// 	$request_album_2_name = $fb->get(''.$album_2['id'].'?fields=name');
		// 	$album_2_obj = $request_album_2_name->getGraphNode();

		// 	$photos_request = $fb->get(''.$album_2['id'].'/photos?fields=id,picture,name,likes,tags');
		// 	$photos = $photos_request->getGraphEdge()->asArray();
		// 	foreach($photos as $photo){

		// 		$img_detail = $photo['picture'];
		// 		$id_product = 1;
		// 		$img_id_fb = $photo['id'];

		// 		$collection = $album_2_obj->getProperty('name');
		// 		$id_fashion = 1;
		// 		$id_gender = 3;
		// 		$id_fb_collection = $album_2['id'];

		// 		$sql_insert_product_detail = "INSERT INTO `product_detail` (
		// 										`detail_img`,
		// 										`id_product`,
		// 										`id_img_fb`)
		// 								VALUES ('$img_detail',
		// 										'$id_product',
		// 										'$img_id_fb')";
										
		// 		$consql_wing->query($sql_insert_product_detail);										
		// 			echo $consql_wing->error;
		// 	}
		// }
		// foreach($albums as $album_3){

		// 	$request_album_3_name = $fb->get(''.$album_3['id'].'?fields=name');
		// 	$album_3_obj = $request_album_3_name->getGraphNode();

		// 	$photos_request = $fb->get(''.$album_3['id'].'/photos?fields=id,picture,name,likes,tags');
		// 	$photos = $photos_request->getGraphEdge()->asArray();
		// 	foreach($photos as $photo){

		// 		$tags_request = $fb->get(''.$photo['id'].'/tags?fields=name,created_time');
		// 		$tags = $tags_request->getGraphEdge()->asArray();

		// 		foreach ($tags as $tag) {

		// 			$request_photo_name = $fb->get(''.$photo['id'].'?fields=name');
		// 			$photo_obj = $request_photo_name->getGraphNode();

		// 			$id_fashion = 1;
		// 			$id_customer = 1;
		// 			$id_product_type = 1;
		// 			$id_collection = 1;
		// 			$id_project = 1;
		// 			$id_product_detail = 1;
		// 			$name = $photo_obj->getProperty('name');
		// 			$date_started = date("Y-m-d H:i:s");
		// 			$date_verified = date("Y-m-d H:i:s");

		// 			$product_tag = $tag['name'];
		// 			$price_tag = '';
		// 			$made_in_tag = '';
		// 			$size_tag = '';
		// 			$colour_tag = '';
		// 			$quantity_tag = '';

		// 			if (strpos($product_tag, 'price') !== false) {
		// 				$remove_unuse_txt = strstr($tag['name'],'__');
		// 			    $price_tag = str_replace('__','',$remove_unuse_txt);
		// 			}
		// 			if (strpos($product_tag, 'made_in') !== false) {
		// 				$remove_unuse_txt = strstr($tag['name'],'__');
		// 			    $made_in_tag = str_replace('__','',$remove_unuse_txt);
		// 			}
		// 			if (strpos($product_tag, 'size') !== false) {
		// 				$remove_unuse_txt = strstr($tag['name'],'__');
		// 			    $size_tag = str_replace('__','',$remove_unuse_txt);
		// 			}
		// 			if (strpos($product_tag, 'colour') !== false) {
		// 				$remove_unuse_txt = strstr($tag['name'],'__');
		// 			    $colour_tag = str_replace('__','',$remove_unuse_txt);
		// 			}
		// 			if (strpos($product_tag, 'quantity') !== false) {
		// 				$remove_unuse_txt = strstr($tag['name'],'__');
		// 			    $quantity_tag = str_replace('__','',$remove_unuse_txt);
		// 			}

		// 			$sql_insert_product = "INSERT INTO `product` (
		// 									name,
		// 									made_in,
		// 									price,
		// 									date_started,
		// 									date_verified,
		// 									size,
		// 									colour,
		// 									quantity,
		// 									fashion_id,
		// 									id_customer,
		// 									id_product_type,
		// 									id_collection,
		// 									id_project,
		// 									id_product_detail) 
		// 									values ('$name',
		// 											'$made_in_tag',
		// 											'$price_tag',
		// 											'$date_started',
		// 											'$date_verified',
		// 											'$size_tag',
		// 											'$colour_tag',
		// 											'$quantity_tag',
		// 											'$id_fashion',
		// 											'$id_customer',
		// 											'$id_product_type',
		// 											'$id_collection',
		// 											'$id_project',
		// 											'$id_product_detail')";
		// 			$consql_wing->query($sql_insert_product);

		// 			echo $consql_wing->error;
		// 			// header("location: ?page=tobanvo&".$str_check_fb."");
		// 		}		
		// 	}
		// }
		
		header("location: ?page=tobanvo&".$str_check_fb."");

?>
