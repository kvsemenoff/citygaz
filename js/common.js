

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




	$("a[data-fancybox-group=group]").fancybox({
		'transitionIn' : 'none',
		'transitionOut' : 'none',
		'titlePosition' : 'over',
		'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
			return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
		}
	});



	$(".owl-carousel").owlCarousel({
		loop:true,
		nav:true,
		autoplay:false,
		smartSpeed:1000,
		margin:5,
		mouseDrag:false,
		touchDrag: false,
		center:false,
		navText:['<span class="prev-left"></span>','<span class="next-right"></span>'],
		responsive:{
			0:{
				items:1
			},
			550:{
				items:2
			},
			770:{
				items:3
			},
			992:{
				items:4
			},
			1200:{
				items:5
			}
		}
	});

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

// accorderon 3 ul

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
/////////////////////////

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
	/////////////////

	// galery on product page
	$('.product__galerybox a').on('click',function(evt) { 
		evt.preventDefault();     		
		var imgPath = $(this).attr('href');         
		var oldImage = $('.product__imgbox img');              
		var newImage = $('<img src="' + imgPath +'">' );
		$('.product__galerybox a').removeClass('product__galerybox-active');
		$(this).addClass('product__galerybox-active');
		$(this).parents('.product__leftbox').find('.product__imgbox a').html(newImage);      
		$(this).parents('.product__leftbox').find('.product__imgbox a').attr('href', imgPath);      
	});
	////////////



	$(".busket__listbox-kolvo .busket__button").on("click", function() {
		var button = $(this);
		var oldValue = button.parent().find("input").val();
		if (button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		}
		else {
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		button.parent().find("input").val(newVal);
	});


	$('.brand__allbrends a').on('click',  function(event) {
		event.preventDefault();
		$(this).toggleClass('brand__allbrends__activelink');
		$(this).parent().next('.brand__hiddenbox').slideToggle();
	});

});

$(window).scroll(function(){
	
  var sticky = $('.header-top'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) $('.header-top-fixed').css('display', 'block');
  else $('.header-top-fixed').css('display', 'none');
});

$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('.toTop').fadeIn();
        } else {
            $('.toTop').fadeOut();
        }
    });
    $('.toTop').click(function() {
        $('body,html').animate({scrollTop:0},800);
    });
});
