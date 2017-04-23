<?php 

	$sql_select_product_and_colletion = "SELECT product.name,
								product.price,
								collection.collection,
								collection.id_collection
						 from product
						 JOIN collection
						 on product.id_collection = collection.id_collection";
	$sql_select_product_and_colletion_rs = $consql_wing->query($sql_select_product_and_colletion);

?>
	<ul class="main-menu">
					
		<?php foreach($main_menu as $key => $value):?>

			<li <?php if($page == $key):?>class="active"<?php endif;?>><a href="./?page=<?php echo $key;?>&<?php echo $str_check_fb;?>"><?php echo $value;?></a></li>	

		<?php endforeach;?>

	</ul>
</div>
<div class="qn-right">
	<div class="clothes">
		<div class="category-menu">
			<ul>
				<?php while($row_select_product_and_collection = $sql_select_product_and_colletion_rs->fetch_assoc()):?>
					<li>
						<a href="./?page=detail&<?php echo $str_check_fb;?>product=<?php echo $row_select_product_and_collection[id_product];?>">
							<?php 
								$sql_select_img_collection = "SELECT * from product_detail where id_collection = ".$row_select_product_and_collection["id_collection"]." limit 1";
								$sql_select_img_collection_rs = $consql_wing->query($sql_select_img_collection);
								while($row_select_img_collection = $sql_select_img_collection_rs->fetch_assoc()):
							?>
								<img class="lazy" src="<?php echo $row_select_img_collection['detail_img'];?>" alt="" data-original="<?php echo $row_select_img_collection['detail_img'];?>">
							<?php endwhile;?>
							<span class="cate-na">
								<?php echo $row_select_product_and_collection['collection'];?>
							</span>
						</a>
					</li>
				<?php endwhile;?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>