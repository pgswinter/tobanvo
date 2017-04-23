<?php

	

?>
<ul class="main-menu">
					
	<?php foreach($main_menu as $key => $value):?>

		<li <?php if($page == $key):?>class="active"<?php endif;?>><a href="./?page=<?php echo $key;?>&<?php echo $str_check_fb;?>"><?php echo $value;?></a></li>	

	<?php endforeach;?>

</ul>
</div>
<div class="to-main">
	<p class="thankyou"><span>*Thank you</span><br> for buying from QN.<br> Wish you great moments and soon back to us</p>
	<a class="shop" href="http://freedomwalking.org/tobanvo"></a>
</div>