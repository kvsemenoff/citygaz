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