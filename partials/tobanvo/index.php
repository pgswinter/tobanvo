<?php 

	$sql_select_product = "SELECT * from product";
	$sql_select_product_rs = $consql_wing->query($sql_select_product);

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
				<?php while($row_select_product = $sql_select_product_rs->fetch_assoc()):?>
					<li>
						<a href="./?page=detail&<?php echo $str_check_fb;?>product=<?php echo $row_select_product[id_product];?>">
							<img class="lazy" src="<?php echo $row_select_product['img'];?>" alt="" data-original="<?php echo $row_select_product['img'];?>">
							<span class="cate-na">
								<?php echo $row_select_product['name'];?>
							</span>
						</a>
					</li>
				<?php endwhile;?>
			</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>