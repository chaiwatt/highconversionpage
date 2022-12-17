(function($) {
	'use strict'; 
	
    /*
	prettyphoto
    =========================== */	
    $(".img-wrapper:first a[data-pretty^='prettyphoto']").prettyphoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
	$(".img-wrapper:gt(0) a[data-pretty^='prettyphoto']").prettyphoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	
})(jQuery);



