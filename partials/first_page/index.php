<?php
	
	$id_product = $_GET['product'];
	$get_page = $_GET['page'];

	$sql_select_product = "SELECT * from product where `id_product`=$id_product";
	$sql_select_product_rs = $consql_wing->query($sql_select_product);
?>
<ul class="main-menu">
					
		<?php foreach($main_menu as $key => $value):?>

			<li <?php if($page == $key):?>class="active"<?php endif;?>><a href="./?page=<?php echo $key;?>&<?php echo $str_check_fb;?>"><?php echo $value;?></a></li>	

		<?php endforeach;?>

	</ul>
</div>
<div class="qn-right ecommercial-one">
	<div class="detail-wrapper">
		<h2>shopping basket</h2>
		<table cellpadding="0" cellspacing="0" class="table">
			<thead>
				<tr>
					<th class="prod">Product</th>
					<th class="desc">Description</th>
					<th class="color">Colour</th>
					<th class="size">Size</th>
					<th class="quant">Quantity</th>
					<th class="price">Amount</th>
					<th class="delete">Delete</th>
				</tr>
			</thead>
			<tbody>						
				<tr class="">
					<?php while($row_select_product = $sql_select_product_rs->fetch_assoc()):?>
						<td class="hidden">
							<a href="#"><?php echo $row_select_product['id_product']?></a>
						</td>
				     	<td class="prod">
				     		<a href="./?page=second_page&<?php echo $str_check_fb;?>product=<?php echo $row_select_product_1['id_product'];?>">
								<img src="<?php echo $row_select_product['img']?>" alt="" width="100" height="128">
							</a>
						</td>
						<td class="desc">
							<a href="./?page=second_page&<?php echo $str_check_fb;?>product=<?php echo $row_select_product_1['id_product'];?>">
								<span><?php echo $row_select_product['name']?></span>
							</a>
						</td>  
				    	
						<td class="color">
							<?php echo $row_select_product['colour']?>
						</td>
						
						<td class="size">
							<span><?php echo $row_select_product['size']?></span>
						</td>
						<td class="quant">										
							<span class="num">
								<?php echo $row_select_product['quantity']?>
		   					</span>
							<span>
								<a href="" class="addUnit squareButton">+</a>
								<a href="" class="decreaseUnit squareButton">-</a>
							</span>
						</td>
						<td class="price">
							<span>
								<?php echo $row_select_product['price']?>
							</span>
						</td>
						<td class="delete">
							<a href="" class="deleted"></a>
						</td>
					<?php endwhile;?>							
				</tr>
			</tbody>			
			<tfoot>
				<tr class="labelName">
					<td colspan="2" rowspan="4" class="alignLeft">
						
					</td>
					<td colspan="3">Total products:</td>
					<td class="amount">
						<span id="totalProductsCalc">
							$ 0.00
						</span>
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr class="labelValue">
					<td colspan="3">Estimated shipping costs :</td>
					<td class="amount">
						<span id="gastosEnvioCalc">
							$ 0.00
						</span>
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr class="total">
					<td colspan="3">Total</td>
					<td class="amount">
						<span id="totalOrderCalc">
							$ 0.00
						</span>
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr class="vat padB20">
					<td colspan="4">
						<em>* VAT included</em>
					</td>					
					<td>&nbsp;</td>
				</tr>
			</tfoot>
		</table>
		<div class="wrapper-button">
			<a href="http://freedomwalking.org/tobanvo?<?php echo $str_check_fb;?>" class="continue-shoping normalButton white">continue shopping</a>
			<a href="./?page=second_page&<?php echo $str_check_fb;?>product=<?php echo $id_product;?>" class="continue normalButton black">continue</a>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>