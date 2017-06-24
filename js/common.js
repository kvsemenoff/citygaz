

$(document).ready(function(){	
	// стилизованный селект
	$('select').selectric();

	// стизизованный input type range
	$("#range").ionRangeSlider({
		hide_min_max: true,
		hide_from_to:true,
		keyboard: true,
		min: 0,
		max: 5000,
		from: 250,
		to: 3000,
		type: 'double',
		step: 10,
		prefix: "",
		grid: false,            
		onChange:  function (data) {			
			$('.sidebarchangeprice').val(data.from);
			$('.sidebartotalprice').val(data.to);			
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


	// slider &  counter
	var owlcart = $(".slider-owl-carousel");
	owlcart.owlCarousel({
		loop:false,
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
	$('.slider-owl-carousel').each(function(index) {
		var thisitem = $(this).find('.item');
		$(this).next('.slidermain__counter')
		.find('.slider__allcount').html($(thisitem).length);			
	});		
	$('.slider-owl-carousel .next-right').on('click', function() {
		var thisel = $(this).parents('.slidermain').find('.slider__changecount');
		var numberActive = thisel.text();	
		numberActive = parseFloat(numberActive);
		var numberAll = $(this).parents('.slidermain').find('.slider__allcount').text();
		numberAll = parseFloat(numberAll);
		if (numberActive < numberAll) {
			numberActive++;
			$(thisel).text(numberActive);
		}	
	});
	$('.slider-owl-carousel .prev-left').on('click', function() {		
		var thisel = $(this).parents('.slidermain').find('.slider__changecount');
		var numberActive = thisel.text();	
		numberActive = parseFloat(numberActive);
		var numberAll = $(this).parents('.slidermain').find('.slider__allcount').text();
		numberAll = parseFloat(numberAll);
		if (numberActive > 1) {
			numberActive--;
			$(thisel).text(numberActive);
		}	
	});
//////////////////////////////


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
	
	$('.sidebar-catalog').hover(function () {
		if(window.matchMedia('(min-width : 770px)').matches){
			var x = $('.sidebar-catalog').outerWidth();				
			$('.sidebar-catalog__showmenu').css('left', x-7);
		}
	});	

});
