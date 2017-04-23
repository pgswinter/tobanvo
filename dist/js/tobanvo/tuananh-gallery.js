/* ------------------------------------------------------------------------------------------------------------------------ Gallery- */
	$('.hautecouturefall2015 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.hautecouturefall2015 .next,.hautecouturefall2015 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraHautecouturefall2015 = $('.hautecouturefall2015 ul li').length
	console.log(headOfHydraHautecouturefall2015)

	$('.hautecouturefall2015 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraHautecouturefall2015){
			$('.hautecouturefall2015 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.hautecouturefall2015 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.hautecouturefall2015 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.hautecouturefall2015 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.hautecouturefall2015 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.hautecouturefall2015 ul li:nth-child('+headOfHydraHautecouturefall2015+')').addClass('active-gallery')
			var getNextSRC = $('.hautecouturefall2015 ul li:nth-child('+headOfHydraHautecouturefall2015+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.hautecouturefall2015 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.hautecouturefall2015 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END hautecouturefall2015 */

	$('.fall2015 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.fall2015 .next,.fall2015 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraFall2015 = $('.fall2015 ul li').length
	

	$('.fall2015 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraFall2015){
			$('.fall2015 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.fall2015 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.fall2015 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.fall2015 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.fall2015 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.fall2015 ul li:nth-child('+headOfHydraFall2015+')').addClass('active-gallery')
			var getNextSRC = $('.fall2015 ul li:nth-child('+headOfHydraFall2015+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.fall2015 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.fall2015 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END fall2015 */

	$('.spring2015 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.spring2015 .next,.spring2015 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraSpring2015 = $('.spring2015 ul li').length
	

	$('.spring2015 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraSpring2015){
			$('.spring2015 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.spring2015 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.spring2015 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.spring2015 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.spring2015 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.spring2015 ul li:nth-child('+headOfHydraSpring2015+')').addClass('active-gallery')
			var getNextSRC = $('.spring2015 ul li:nth-child('+headOfHydraSpring2015+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.spring2015 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.spring2015 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END spring2015 */

	$('.fall2014 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.fall2014 .next,.fall2014 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraFall2014 = $('.fall2014 ul li').length
	

	$('.fall2014 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraFall2014){
			$('.fall2014 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.fall2014 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.fall2014 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.fall2014 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.fall2014 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.fall2014 ul li:nth-child('+headOfHydraFall2014+')').addClass('active-gallery')
			var getNextSRC = $('.fall2014 ul li:nth-child('+headOfHydraFall2014+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.fall2014 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.fall2014 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END fall2014 */

	$('.spring2014 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.spring2014 .next,.spring2014 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraSpring2014 = $('.spring2014 ul li').length
	

	$('.spring2014 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraSpring2014){
			$('.spring2014 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.spring2014 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.spring2014 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.spring2014 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.spring2014 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.spring2014 ul li:nth-child('+headOfHydraSpring2014+')').addClass('active-gallery')
			var getNextSRC = $('.spring2014 ul li:nth-child('+headOfHydraSpring2014+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.spring2014 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.spring2014 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END spring2014 */

	$('.fall2013 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.fall2013 .next,.fall2013 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraFall2013 = $('.fall2013 ul li').length
	

	$('.fall2013 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraFall2013){
			$('.fall2013 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.fall2013 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.fall2013 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.fall2013 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.fall2013 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.fall2013 ul li:nth-child('+headOfHydraFall2013+')').addClass('active-gallery')
			var getNextSRC = $('.fall2013 ul li:nth-child('+headOfHydraFall2013+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.fall2013 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.fall2013 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END fall2013 */

	$('.spring2013 ul li a').click(function(e){
		e.preventDefault()
		$('.closed,.spring2013 .next,.spring2013 .previous').addClass('show')
		$('.black-bg').addClass('show-mirror')
		$(this).parent().addClass('active-gallery')
		
		var getSRC = $(this).children().attr('src')
		console.log(getSRC)
		
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.glr-img').attr('src',''+getSRC+'')
	})

	var headOfHydraSpring2013 = $('.spring2013 ul li').length
	

	$('.spring2013 .next').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == headOfHydraSpring2013){
			$('.spring2013 ul li:nth-child(1)').addClass('active-gallery')
			var getNextSRC = $('.spring2013 ul li:nth-child(1) a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.spring2013 ul li:nth-child('+(currentHead+1)+')').addClass('active-gallery')
			var getNextSRC = $('.spring2013 ul li:nth-child('+(currentHead+1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})
	$('.spring2013 .previous').click(function(e){
		e.preventDefault()
		
		var currentHead = $('.active-gallery').index() + 1
		$('.glr-img').remove()
		$('body').append('<img src="" alt="" class="glr-img" />')
		$('.active-gallery').removeClass('active-gallery')
		
		console.log(currentHead)

		if(currentHead == 1){
			$('.spring2013 ul li:nth-child('+headOfHydraSpring2013+')').addClass('active-gallery')
			var getNextSRC = $('.spring2013 ul li:nth-child('+headOfHydraSpring2013+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')	
		}
		else{
			$('.spring2013 ul li:nth-child('+(currentHead-1)+')').addClass('active-gallery')
			var getNextSRC = $('.spring2013 ul li:nth-child('+(currentHead-1)+') a img').attr('src')
			$('.glr-img').attr('src',''+getNextSRC+'')
		}
	})

	/* END spring2013 */
	$('.closed').click(function(e){
		e.preventDefault()
		$('.active-gallery').removeClass('active-gallery')
		$('.black-bg').removeClass('show-mirror')
		$('.glr-img').remove()
		$('.closed,.next,.previous').removeClass('show')
	})
/* ---------------------------------------------------------------------------------------------------------------------- -END Gallery- */