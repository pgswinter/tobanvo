<?php
	// foreach($pages as $page){

	// 	$request_page_name = $fb->get(''.$page[id].'?fields=name');
	// 	$page_obj = $request_page_name->getGraphNode();

	// 	$albums_request = $fb->get(''.$page[id].'/albums?fields=id');
	// 	$albums = $albums_request->getGraphEdge()->asArray();
		foreach($albums as $album){

			$request_album_name = $fb->get(''.$album[id].'?fields=name');
			$album_obj = $request_album_name->getGraphNode();

			$photos_request = $fb->get(''.$album[id].'/photos?fields=id,picture,name,likes,tags');
			$photos = $photos_request->getGraphEdge()->asArray();
			foreach($photos as $photo){

				$tags_request = $fb->get(''.$photo[id].'/tags?fields=name,created_time');
				$tags = $tags_request->getGraphEdge()->asArray();

				foreach ($tags as $tag) {
					
					$request_photo_name = $fb->get(''.$photo[id].'?fields=name');
					$photo_obj = $request_photo_name->getGraphNode();

					$id_fashion = 1;
					$id_gender = 3;
					$id_customer = 1;
					$id_product_type = 1;
					$id_collection = 1;
					$id_project = 1;
					$id_product_detail = 1;

					$collection = $album_obj->getProperty('name');
					$id_fb_collection = $album[id];
					$id_fanpage = $page[id];
					$name_fanpage = $page_obj->getProperty('name');

					$name = $photo_obj->getProperty('name');
					$date_started = date("Y-m-d H:i:s");
					$date_verified = date("Y-m-d H:i:s");

					$product_tag = $tag['name'];
					$price_tag = '';
					$made_in_tag = '';
					$size_tag = '';
					$colour_tag = '';
					$quantity_tag = '';

					if (strpos($product_tag, 'price') !== false) {
						$remove_unuse_txt = strstr($tag['name'],'__');
					    $price_tag = str_replace('__','',$remove_unuse_txt);
					}
					if (strpos($product_tag, 'made_in') !== false) {
						$remove_unuse_txt = strstr($tag['name'],'__');
					    $made_in_tag = str_replace('__','',$remove_unuse_txt);
					}
					if (strpos($product_tag, 'size') !== false) {
						$remove_unuse_txt = strstr($tag['name'],'__');
					    $size_tag = str_replace('__','',$remove_unuse_txt);
					}
					if (strpos($product_tag, 'colour') !== false) {
						$remove_unuse_txt = strstr($tag['name'],'__');
					    $colour_tag = str_replace('__','',$remove_unuse_txt);
					}
					if (strpos($product_tag, 'quantity') !== false) {
						$remove_unuse_txt = strstr($tag['name'],'__');
					    $quantity_tag = str_replace('__','',$remove_unuse_txt);
					}

					$img_detail = $photo['picture'];

					$sql_insert_collection = "INSERT INTO `collection` (
												`collection`,
												`fashion_id`,
												`id_gender`,
												`id_collection_fb`,
												`id_fanpage`,
												`name_fanpage`)
										VALUES ('$collection',
												'$id_fashion',
												'$id_gender',
												'$id_fb_collection',
												'$id_fanpage',
												'$name_fanpage')";
					$consql_wing->query($sql_insert_collection);

					$sql_insert_product = "INSERT INTO `product` (
												`name`,
												`made_in`,
												`price`,
												`size`,
												`colour`,
												`quantity`,
												`date_started`,
												`fashion_id`,
												`id_customer`,
												`id_product_type`,
												`id_collection`,
												`id_project`,
												`id_product_detail`)
										VALUES ('$name',
												'$made_in_tag',
												'$price_tag',
												'$size_tag',
												'$colour_tag',
												'$quantity_tag',
												'$date_started',
												'$date_verified',
												'$id_fashion',
												'$id_customer',
												'$id_product_type',
												'$id_collection',
												'$id_project',
												'$id_product_detail')";
					$consql_wing->query($sql_insert_product);

					$sql_insert_product_detail = "INSERT INTO `product_detail` (
												`detail_img`)
										VALUES ('$img_detail')";
										
					$consql_wing->query($sql_insert_product_detail);

					echo $consql_wing->error;
					header("location: ?page=tobanvo&".$str_check_fb."");
				}		
			}
		}
	// }

?>
