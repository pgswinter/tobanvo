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
		<h2 class="mod">process order</h2>
		<p class="call-contact">If you need assistance you can call our free customer service line: 1600 1xxx FREE</p>
		<div class="shipping-and-payment">
			<ul class="mod">
				<li>1. shipping</li>
				<li>2. payment</li>
			</ul>
			<div class="shipping-wrapper">
				<h3 class="sub-mod">SELECT A PAYMENT METHOD</h3>
				<ul class="mod">
					<li>
						<a class="visa" href=""></a>
					</li>
					<li>
						<a class="master-card" href=""></a>
					</li>
					<li>
						<a class="paypal" href=""></a>
					</li>
				</ul>
				<div class="total-banner mod">
					<p class="big">Total products:	<span>$ 49.90</span></p>
					<p>Discount:	<span>$ 49.90</span></p>
					<p>Shipping Standard:	<span>$ 49.90</span></p>
					<p>TOTAL:	<span>$ 49.90</span></p>
				</div>
			</div>
			<div class="wrapper-button mod">
				<a href="./?page=second_page&<?php echo $str_check_fb;?>product=<?php echo $id_product;?>" class="back normalButton white">back</a>
				<a href="./?page=thank_you&<?php echo $str_check_fb;?>product=<?php echo $id_product;?>" class="continue normalButton black">finalise order</a>
				<div class="clear"></div>
			</div>
			<div class="contact-wrapper">
				<h3 class="sub-mod">DETAILS OF YOUR ORDER</h3>
				<div class="mod">
					<ul class="billing-address">
						<li>Billing address: US</li>
						<li>Email</li>
						<li>Telephone</li>
						<li>Name</li>
						<li>Address</li>
						<li>City</li>
						<li>Country</li>
					</ul>
					<ul class="shipping-address">
						<li>Billing address: Vietnam</li>
						<li>Email</li>
						<li>Telephone</li>
						<li>Name</li>
						<li>Address</li>
						<li>City</li>
						<li>Country</li>
					</ul>
					<div class="clear"></div>
				</div>
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
						<?php while($row_select_product = $sql_select_product_rs->fetch_assoc()):?>
							<tr class="">
								<td class="hidden">
									<a href="#"><?php echo $row_select_product['id_product']?></a>
								</td>
						     	<td class="prod">
									<img src="<?php echo $row_select_product['img']?>" alt="" width="100" height="128">
								</td>
								<td class="desc">
									<span><?php echo $row_select_product['name']?></span>
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
							</tr>
						<?php endwhile;?>
					</tbody>			
					<tfoot>
						<tr class="labelName">
							<td colspan="2" rowspan="4" class="alignLeft">
								
							</td>
							<td colspan="3">Total products:</td>
							<td class="amount">
								<span id="totalProductsCalc">
									$ 49.90
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
									$ 49.90
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
			</div>
		</div>
		<div class="wrapper-button">
			<a href="./?page=second_page&<?php echo $str_check_fb;?>product=<?php echo $id_product;?>" class="back normalButton white">back</a>
			<a href="./?page=thank_you&<?php echo $str_check_fb;?>product=<?php echo $id_product;?>" class="continue normalButton black">finalise order</a>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>