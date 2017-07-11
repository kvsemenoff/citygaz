

$(document).ready(function(){	
	$("head").append('<link href="https://fonts.googleapis.com/css?family=Roboto:100,300i,400,500,500i,700,700i,900" rel="stylesheet">');
	$("head").append("<link href='//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css' rel='stylesheet'>");
		$('a[data-modal="modal"]').on("click", function(e){
		e.preventDefault();
		var  id = $(this).attr('href'),
		winW = $(window).width(),
		winH = $(window).height();
		$(id).css("left", winW/2-$(id).innerWidth()/2);
		$(id).css("top", winH/2-$(id).innerHeight()/2);
		$('body').append('<div class="mask"></div>');
		$(id).fadeIn();
	});

	$('a[data-modal="mobile"]').on("click", function(e){
		e.preventDefault();
		var  id = $(this).attr('href'),
		winW = $(window).width(),
		winH = $(window).height();
		$(id).css("left", winW/2-$(id).innerWidth()/2);
		$(id).css("top", 0);
		$('body').append('<div class="mask"></div>');
		$('body').css('overflow','hidden');
		$('body').css('overflow','hidden');
		$(id).css('display', 'block');
	});
	 
	$('body').on("click", ".modal-close", function(e){
		e.preventDefault();
		$('.mask').remove();
		$('.modal-window').hide();
		$('.mobile-window').hide();
		$('body').css('overflow','scroll');
	});
	$('body').on("click", ".mask", function(e){
		e.preventDefault();
	$('.mask').remove();
		$('.modal-window').hide();
	});

	$('.mobile-window').find('.contact-box').parent('.col-sm-12').css({'border-top': '1px solid #1e73c6'});
	$("form[name='popup_form']").submit(function() {
		$data = $(this).serialize();
		$.ajax({
			    type: "POST", 
			    url: "sendmessage.php", 
			    data: $data,
			    success: function() {
			     cleanTnanks(this);
			    }
		});
		return false;
	});
	function cleanTnanks(form){
		$('form').parent().hide();
	  	$("input[type=text]").val("");
	  	$("input[type=tel]").val("");
	  	$("textarea").val("");
	  	$('a[href="#thanks"]').trigger('click');
	    // location = "thanks.php";
	};
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
		lazyLoad : true,
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

	var count_slides = $('.slider-owl-carousel .item').length;
	$('.slider__allcount').html(count_slides);
	
	// slider main &  counter
	var owlcart = $(".slider-owl-carousel");
	owlcart.owlCarousel({
		loop:true,
		nav:true,
		autoplay:true,
		smartSpeed:1000,
		margin:10,
		mouseDrag:true,
		touchDrag: true,
		center:false,
		lazyLoad : true,
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
	owlcart.on('changed.owl.carousel', function (e) {
	    var current = e.page.index+1;
		$('.slider__changecount').text(current);
	});

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
		if(window.matchMedia('(max-width : 992px)').matches){
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

	// catalog tablet or list tabs

	$('.catalogpage__filter-links a').on('click', function(e) {
		if(window.matchMedia('(min-width : 992px)').matches){
			e.preventDefault();
			$('.catalogpage__filter-links a').removeClass('catalogpage__filter-linkactive');
			$(this).addClass('catalogpage__filter-linkactive');
			var tab = $(this).attr('href');
			tab = '.' + tab;
			$('.catalogpage__tabjs').not(tab).css({'display':'none'});
			$(tab).css({'display':'block'});
		}
	});

	////////////////


	// catalog page catalog-button on mobile
	$(".product__topbox_buttonskatalog .product__catalog").on('click', function(e){
		e.preventDefault();			
		if(window.matchMedia('(max-width : 992px)').matches){
			$('.product__onclickandhover').slideToggle(250);		
		}
	});
	////////
	// catalog page filter burger on mobile
	$(".filterblock_burger_for_xs_sm").on('click', function(e){
		e.preventDefault();			
		if(window.matchMedia('(max-width : 992px)').matches){
			$('.filterblock_hiddenon-xs_sm').slideToggle(300);		
		}
	});
	// main page brend burger on mobile
	$(".brand_button_xs_sm").on('click', function(e){
		e.preventDefault();			
		if(window.matchMedia('(max-width : 992px)').matches){
			$('.brand_hidden_xs_sm').slideToggle(300);		
		}
	});
	///////////


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


$(document).ready(function() {

	$('.watch-more').click(function(e) {
		e.preventDefault();	
		$cataloglist = $(this).parents('.cat-item').find('.catid').find('.catalog-list').html();
		$(this).parents('.cat-item').find('.cat-item-inner').find('.catalog-list').html($cataloglist);
		$(this).parents('.cat-item').find('.cat-item-inner').fadeIn();
		var height = $(this).parents('.cat-item_one').find('.catalog-list-absolute').height()+150;
		$('.catalog .modal-close').show();

	});
	$('body').on("click", ".modal-close", function(e){
		e.preventDefault();
		$('.cat-item-inner').fadeOut();
	});

	$(document).mouseup(function (e) {
    	var container = $(".cat-item-inner");
    	if (container.has(e.target).length === 0){
       	 	container.fadeOut(500);
    	}
	});
});