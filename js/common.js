

$(document).ready(function(){	
	// стилизованный селект
	$('select').selectric();


	$('input[type="range"]').rangeslider({
		polyfill: false,	
		onSlide: function(position, value) {
			
		},	
	});


	// $('.burger a').on("click", function(){
	// 	$('.main-menu').slideToggle();
	// });

	// // Бургер (legatkani)
	// $(".burger").click(function(){
	// 	$(".main-menu__style").slideDown(500);
	// 	$(".fa-bars").css("display", "none");
	// });
	// $(".main-menu__closer").click(function(){
	// 	$(".main-menu__style").slideUp(500);
	// 	$(".fa-bars").css("display", "inline-block");
	// });
	// // END бургер (legatkani)

	var owlcart = $(".slider-owl-carousel");
	owlcart.owlCarousel({
		loop:true,
		nav:true,
		autoplay:false,
		smartSpeed:1000,
		margin:10,
		mouseDrag:false,
		touchDrag: false,
		center:false,
		navText:['<span class="prev-left"></span>','<span class="next-right"></span>'],
		responsive:{
			0:{
				items:1
			},
			320:{
				items:1
			},
			750:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	$('.js-phone').mask("+7(999)999-99-99?");

	
	$(".tech-doc>li>span").on('click', function(e){
		e.preventDefault();		
		var answerId = $(this).next(".tech-doc__inside");
		if( !$(this).hasClass("tech-doc__active")){
			$(".tech-doc__inside").slideUp();
			$(".tech-doc>li>span").removeClass("tech-doc__active");
		}
		$(this).toggleClass("tech-doc__active"); 
		$(answerId).slideToggle();
	});
	$(".tech-doc__inside>li>span").on('click', function(e){
		e.preventDefault();		
		var answerId = $(this).next(".tech-doc__inside-links");
		if( !$(this).hasClass("tech-doc__active_inside")){
			$(".tech-doc__inside-links").slideUp();
			$(".tech-doc__inside>li>span").removeClass("tech-doc__active_inside");
		}
		$(this).toggleClass("tech-doc__active_inside"); 
		$(answerId).slideToggle();
	});

	
	// sidebar accordeon on mobile
	
	$(".sidebar-catalog>li>span").on('click', function(e){
		if(window.matchMedia('(max-width : 770px)').matches){
			e.preventDefault();		
			var answerId = $(this).next(".sidebar-catalog__showmenu");
			if( !$(this).hasClass("sidebar-catalog__active")){
				$(".sidebar-catalog__showmenu").slideUp();
				$(".sidebar-catalog>li>span").removeClass("sidebar-catalog__active");
			}
			$(this).toggleClass("sidebar-catalog__active"); 
			$(answerId).slideToggle();
		}
	});
	

});
