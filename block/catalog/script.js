$(document).ready(function() {
	$top_catalog = $('.catalog div:nth-child(3)').outerHeight(true);
	$('.catalog div:nth-child(4)').css({'top': $top_catalog});

	$('.catalog-list').each(function() {

		var li = $(this).find('li').size();
		if( li > 13 ){
			$(this).find('li').slice(13, li).hide();
		}
	});

	$('.catalog').find('div').children('.watch-more').click(function() {
		$(this).parent().find('li').slice(13,100).css({'display':'block'});
		$(this).parent().css({'padding-bottom':'0','box-shadow':'1px 5px 40px -5px rgba(0,0,0,0.75)'});
		$(this).parent().find('.catalog-list').css({'height':'auto'});
		$(this).css({'display':'none'});
		return false;
	});
});