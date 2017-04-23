<?php
	
	$id_product = $_GET['product'];
	$get_page = $_GET['page'];

	$sql_select_product_detail = "SELECT * from product_detail where `id_product`=$id_product";
	$sql_select_product_detail_rs = $consql_wing->query($sql_select_product_detail);

	$sql_select_product = "SELECT * from product where `id_product`=$id_product";
	$sql_select_product_rs = $consql_wing->query($sql_select_product);
	$sql_select_product_rs_1 = $consql_wing->query($sql_select_product);

?>
	<ul class="main-menu">
		
		<li>

			<?php echo $get_page;?>
			<ul>
				<?php while($row_select_product = $sql_select_product_rs->fetch_assoc()):?>
					<li><?php echo $row_select_product['name'];?></li>
				<?php endwhile;?>
			</ul>

		</li>

	</ul>
</div>
<div class="detail qn-right">
	<div class="detail-wrapper">
		<div class="category-menu">
			<ul>
				<?php while($row_select_product_detail = $sql_select_product_detail_rs->fetch_assoc()):?>
					<li>
						<img class="lazy" src="<?php echo $row_select_product_detail['detail_img'];?>" alt="" data-original="<?php echo $row_select_product_detail['detail_img'];?>">
					</li>
				<?php endwhile;?>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div class="paying">
		<?php while($row_select_product_1 = $sql_select_product_rs_1->fetch_assoc()):?>
			<h2><?php echo $row_select_product_1['name'];?></h2>
			<p class="quantity"><span>Available</span> / Out of stock</p>
			<p class="id-product"><span>ID Number</span><label for="">: <?php echo $row_select_product_1['id_product'];?></label></p>
			<p class="price"><?php echo $row_select_product_1['price'];?></p>
			<p class="termandpolicy">Term & Policy</p>
			<ul class="block-color">					
				<li class="color moonlight"></li>
				<li class="color dark-ocean"></li>
				<li class="color light-grey"></li>
				<li class="color pearl"></li>
			</ul>
			<ul class="size">
				<li><?php echo $row_select_product_1['size'];?></li>
				<li>Made in <?php echo $row_select_product_1['made_in'];?></li>
			</ul>
			<div class="clear"></div>
			<a href="" class="size-guide">If you are asking by yourself:<br>"How many is my site?". Click me!</a>
			<a href="./?page=first_page&<?php echo $str_check_fb;?>product=<?php echo $row_select_product_1['id_product'];?>" class="qn-button basket">ADD TO BASKET</a>
			<p class="just-text">FREE SHIPPING TO STORES</p>
			<p class="just-text">FREE RETURNS</p>
			<ul class="social-product">
				<li><a href="">f</a></li>
				<li><a href="">t</a></li>
				<li><a href="">g+</a></li>
			</ul>
		<?php endwhile;?>
	</div>
	<div class="clear"></div>
</div>