$(function(){
	$('.qn-left ul .category').click(function(e){
		e.preventDefault()
		var positionCurrent = $(this).parent().index()
		$('.qn-right .category').removeClass('show')
		$('.qn-right .category:nth-child('+(positionCurrent)+')').addClass('show')
	})
	$('.to-main').width($(window).width())
	$('.to-main').height($(window).height())


	$('.toggle-menu-button-closed').click(function(e){
		singlePage()
		$(this).removeClass('show').addClass('hide')
		$('.toggle-menu-button-open').addClass('show').removeClass('hide')
	})
	$('.toggle-menu-button-open').click(function(e){
		$('.main-menu a').removeClass('hide')
		$('.main-menu .active-bold').removeClass('show')
		$('.toggle-menu-button-open').addClass('hide').removeClass('show')
		$('.toggle-menu-button-closed').removeClass('hide').addClass('show')
	})

	$('.hautecouturefall2015 .qn-right').width($(window).width() - $('.hautecouturefall2015 .qn-left').width() - 50)

/*- Detail Page ---------------------------------------------------------------------------------------------------------------------- Detail Page- */

/*- End Detail Page ---------------------------------------------------------------------------------------------------------------------- Detail Page- */

/*- Single Page ---------------------------------------------------------------------------------------------------------------------- End Single Page- */
	function singlePage(){
		var distanceTohautecouturefall2015 = $('.hautecouturefall2015').offset().top
		var distanceTofall2015 = $('.fall2015').offset().top
		var distanceTospring2015 = $('.spring2015').offset().top
		var distanceTofall2014 = $('.fall2014').offset().top
		var distanceTospring2014 = $('.spring2014').offset().top
		var distanceTofall2013 = $('.fall2013').offset().top
		var distanceTospring2013 = $('.spring2013').offset().top

		if($(window).scrollTop() == 0){
			$('.main-menu a').removeClass('hide').addClass('show')
			$('.active-bold').removeClass('active-bold')
		}
		if($(window).scrollTop() >= distanceTohautecouturefall2015 && $(window).scrollTop() < $(window).height()){
			$('.main-menu > li > a').removeClass('hide').addClass('show')
			$('.main-menu > li > a.active-bold').removeClass('active-bold')
			$('.collection').addClass('active-bold')
		}
		if($(window).scrollTop() >= distanceTohautecouturefall2015 && $(window).scrollTop() < distanceTofall2015){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-hautecouturefall2015').removeClass('hide').addClass('show')
		}
		if($(window).scrollTop() >= distanceTofall2015 && $(window).scrollTop() < distanceTospring2015){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-fall2015').removeClass('hide').addClass('show')
		}
		if($(window).scrollTop() >= distanceTospring2015 && $(window).scrollTop() < distanceTofall2014){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-spring2015').removeClass('hide').addClass('show')
		}
		if($(window).scrollTop() >= distanceTofall2014 && $(window).scrollTop() < distanceTospring2014){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-fall2014').removeClass('hide').addClass('show')
		}
		if($(window).scrollTop() >= distanceTospring2014 && $(window).scrollTop() < distanceTofall2013){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-spring2014').removeClass('hide').addClass('show')
		}
		if($(window).scrollTop() >= distanceTofall2013 && $(window).scrollTop() < distanceTospring2013){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-fall2013').removeClass('hide').addClass('show')
		}
		if($(window).scrollTop() >= distanceTospring2013){
			$('.main-menu ul a').addClass('hide')
			$('.main-menu ul .active-bold').removeClass('active-bold')
			$('.main-menu .top-spring2013').removeClass('hide').addClass('show')
		}
		
	}
	$(window).scroll(function(){
		singlePage()
	})
	
	
/* ------------------------------------------------------------------------------------------------------------------- END Single Page- */
/* ------------------------------------------------------------------------------------------------------------------- Set center for the end row */

	var hautecouturefall2015Item = $('.hautecouturefall2015 .category-menu ul li').length
	var hautecouturefall2015Surplus = hautecouturefall2015Item%5
	if(hautecouturefall2015Surplus == 1){
		$('.hautecouturefall2015 .category-menu ul li:nth-child('+(hautecouturefall2015Item - hautecouturefall2015Surplus)+')').css({'margin-left':'40%'})
	}
	if(hautecouturefall2015Surplus == 2){
		$('.hautecouturefall2015 .category-menu ul li:nth-child('+(hautecouturefall2015Item - hautecouturefall2015Surplus)+')').css({'margin-left':'30%'})
	}
	if(hautecouturefall2015Surplus == 3){
		$('.hautecouturefall2015 .category-menu ul li:nth-child('+(hautecouturefall2015Item - hautecouturefall2015Surplus)+')').css({'margin-left':'20%'})
	}
	if(hautecouturefall2015Surplus == 4){
		$('.hautecouturefall2015 .category-menu ul li:nth-child('+(hautecouturefall2015Item - hautecouturefall2015Surplus)+')').css({'margin-left':'10%'})
	}

	var fall2015Item = $('.fall2015 .category-menu ul li').length
	var fall2015Surplus = fall2015Item%5

	if(fall2015Surplus == 1){
		$('.fall2015 .category-menu ul li:nth-child('+(fall2015Item)+')').css({'margin-left':'40%'})
	}
	if(fall2015Surplus == 2){
		$('.fall2015 .category-menu ul li:nth-child('+(fall2015Item - fall2015Surplus + 1)+')').css({'margin-left':'30%'})
	}
	if(fall2015Surplus == 3){
		$('.fall2015 .category-menu ul li:nth-child('+(fall2015Item - fall2015Surplus + 1)+')').css({'margin-left':'20%'})
	}
	if(fall2015Surplus == 4){
		$('.fall2015 .category-menu ul li:nth-child('+(fall2015Item - fall2015Surplus + 1)+')').css({'margin-left':'10%'})
	}

	var spring2015Item = $('.spring2015 .category-menu ul li').length
	var spring2015Surplus = spring2015Item%5
	if(spring2015Surplus == 1){
		$('.spring2015 .category-menu ul li:nth-child('+(spring2015Item)+')').css({'margin-left':'40%'})
	}
	if(spring2015Surplus == 2){
		$('.spring2015 .category-menu ul li:nth-child('+(spring2015Item - spring2015Surplus + 1)+')').css({'margin-left':'30%'})
	}
	if(spring2015Surplus == 3){
		$('.spring2015 .category-menu ul li:nth-child('+(spring2015Item - spring2015Surplus + 1)+')').css({'margin-left':'20%'})
	}
	if(spring2015Surplus == 4){
		$('.spring2015 .category-menu ul li:nth-child('+(spring2015Item - spring2015Surplus + 1)+')').css({'margin-left':'10%'})
	}

	var fall2014Item = $('.fall2014 .category-menu ul li').length
	var fall2014Surplus = fall2014Item%5
	if(fall2014Surplus == 1){
		$('.fall2014 .category-menu ul li:nth-child('+(fall2014Item)+')').css({'margin-left':'40%'})
	}
	if(fall2014Surplus == 2){
		$('.fall2014 .category-menu ul li:nth-child('+(fall2014Item - fall2014Surplus + 1)+')').css({'margin-left':'30%'})
	}
	if(fall2014Surplus == 3){
		$('.fall2014 .category-menu ul li:nth-child('+(fall2014Item - fall2014Surplus + 1)+')').css({'margin-left':'20%'})
	}
	if(fall2014Surplus == 4){
		$('.fall2014 .category-menu ul li:nth-child('+(fall2014Item - fall2014Surplus + 1)+')').css({'margin-left':'10%'})
	}

	var spring2014Item = $('.spring2014 .category-menu ul li').length
	var spring2014Surplus = spring2014Item%5
	if(spring2014Surplus == 1){
		$('.spring2014 .category-menu ul li:nth-child('+(spring2014Item)+')').css({'margin-left':'40%'})
	}
	if(spring2014Surplus == 2){
		$('.spring2014 .category-menu ul li:nth-child('+(spring2014Item - spring2014Surplus + 1)+')').css({'margin-left':'30%'})
	}
	if(spring2014Surplus == 3){
		$('.spring2014 .category-menu ul li:nth-child('+(spring2014Item - spring2014Surplus + 1)+')').css({'margin-left':'20%'})
	}
	if(spring2014Surplus == 4){
		$('.spring2014 .category-menu ul li:nth-child('+(spring2014Item - spring2014Surplus + 1)+')').css({'margin-left':'10%'})
	}

	var fall2013Item = $('.fall2013 .category-menu ul li').length
	var fall2013Surplus = fall2013Item%5
	if(fall2013Surplus == 1){
		$('.fall2013 .category-menu ul li:nth-child('+(fall2013Item)+')').css({'margin-left':'40%'})
	}
	if(fall2013Surplus == 2){
		$('.fall2013 .category-menu ul li:nth-child('+(fall2013Item - fall2013Surplus + 1)+')').css({'margin-left':'30%'})
	}
	if(fall2013Surplus == 3){
		$('.fall2013 .category-menu ul li:nth-child('+(fall2013Item - fall2013Surplus + 1)+')').css({'margin-left':'20%'})
	}
	if(fall2013Surplus == 4){
		$('.fall2013 .category-menu ul li:nth-child('+(fall2013Item - fall2013Surplus + 1)+')').css({'margin-left':'10%'})
	}

	var spring2013Item = $('.spring2013 .category-menu ul li').length
	var spring2013Surplus = spring2013Item%5
	if(spring2013Surplus == 1){
		$('.spring2013 .category-menu ul li:nth-child('+(spring2013Item)+')').css({'margin-left':'40%'})
	}
	if(spring2013Surplus == 2){
		$('.spring2013 .category-menu ul li:nth-child('+(spring2013Item - spring2013Surplus + 1)+')').css({'margin-left':'30%'})
	}
	if(spring2013Surplus == 3){
		$('.spring2013 .category-menu ul li:nth-child('+(spring2013Item - spring2013Surplus + 1)+')').css({'margin-left':'20%'})
	}
	if(spring2013Surplus == 4){
		$('.spring2013 .category-menu ul li:nth-child('+(spring2013Item - spring2013Surplus + 1)+')').css({'margin-left':'10%'})
	}	
	

	$('.top-hautecouturefall2015').click(function(e){
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.hautecouturefall2015').offset().top},'slow')
	})
	$('.top-fall2015').click(function(e){	
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.fall2015').offset().top},'slow')
	})
	$('.top-spring2015').click(function(e){	
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.spring2015').offset().top},'slow')
	})
	$('.top-fall2014').click(function(e){	
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.fall2014').offset().top},'slow')
	})
	$('.top-spring2014').click(function(e){	
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.spring2014').offset().top},'slow')
	})
	$('.top-fall2013').click(function(e){	
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.fall2013').offset().top},'slow')
	})
	$('.top-spring2013').click(function(e){	
		e.preventDefault()
		$('html,body').animate({scrollTop:$('.spring2013').offset().top},'slow')
	})
/* ------------------------------------------------------------------------------------------------------------------- END Set center for the end row */
})