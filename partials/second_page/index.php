<?php
	
	$id_product = $_GET['product'];

?>
<ul class="main-menu">
					
		<?php foreach($main_menu as $key => $value):?>

			<li <?php if($page == $key):?>class="active"<?php endif;?>><a href="./?page=<?php echo $key;?>&<?php echo $str_check_fb;?>"><?php echo $value;?></a></li>	

		<?php endforeach;?>

	</ul>
</div>
<div class="qn-right ecommercial-two">
	<div class="detail-wrapper">
		<h2 class="mod">process order</h2>
		<div class="shipping-and-payment">
			<ul class="mod first">
				<li>1. shipping</li>
				<li>2. payment</li>
			</ul>
			<div class="shipping-wrapper">
				<h3 class="sub-mod">shipping method</h3>
				<ul class="mod">
					<li>
						<input type="radio">
						<p>Pick-up in store: In the store of your choice in 4-6 working days. Free</p>
					</li>
					<li>
						<input type="radio">
						<p>Standard: In 4-6 working days. $ 1</p>
					</li>
					<li>
						<input type="radio">
						<p>Express: In 2-3 working days. $ 2</p>
					</li>
				</ul>
			</div>
			<div class="contact-wrapper mod">
				<h3 class="sub-mod">contact detail</h3>
				<div class="typing-form">
					<span>Email <label for="">*</label></span>
					<input type="text">
				</div>
				<div class="typing-form">
					<span>Telephone  <label for="">*</label></span>
					<input type="text">
				</div>
				<h3 class="sub-mod">delivery details</h3>
				<div class="typing-form">
					<span>Name  <label for="">*</label></span>
					<input type="text">
				</div>
				<div class="typing-form">
					<span>Surname  <label for="">*</label></span>
					<input type="text">
				</div>
				<div class="typing-form">
					<span>Address  <label for="">*</label></span>
					<input type="text">
					<div class="clear"></div>
					<input class="special-text" type="text">
				</div>
				<div class="typing-form">
					<span>Post code  <label for="">*</label></span>
					<input type="text">
				</div>
				<div class="typing-form">
					<span>City  <label for="">*</label></span>
					<input type="text">
				</div>
				<div class="typing-form">
					<span>Provide  <label for="">*</label></span>
					<input type="text">
				</div>
				<div class="typing-form">
					<span>Country  <label for="">*</label></span>
					<input type="text">
				</div>
				<p class="rq-f">* Required field</p>
			</div>
		</div>
		<div class="wrapper-button">
			<a href="./?page=third_page&<?php echo $str_check_fb;?>product=<?php echo $id_product;?>" class="continue normalButton black">continue</a>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>