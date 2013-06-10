$(window).load (function() {
	var $container = $('#tile-wrapper');
	$container.isotope({
		itemSelector : '.tile',
		masonry : {
		columnWidth : 0
		},
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false, 
		}
	});
	$('#filters a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({ filter: selector });
		return false;
	});
});

//Infinite Scroll
$('#tile-wrapper').infinitescroll({
		navSelector  	: "#next:last",
		nextSelector 	: "a#next:last",
		itemSelector 	: "#content p",
		debug		 	: true,
		dataType	 	: 'html',
        maxPage         : 3,
//		prefill			: true,
//		path: ["http://nuvique/infinite-scroll/test/index", ".html"]
		path: function(index) {
			return "index" + index + ".html";
		}
		// behavior		: 'twitter',
		// appendCallback	: false, // USE FOR PREPENDING
		// pathParse     	: function( pathStr, nextPage ){ return pathStr.replace('2', nextPage ); }
    }, function(newElements, data, url){
    	//USE FOR PREPENDING
    	// $(newElements).css('background-color','#ffef00');
    	// $(this).prepend(newElements);
    	//
    	//END OF PREPENDING

//    	window.console && console.log('context: ',this);
//    	window.console && console.log('returned: ', newElements);
    	
    });
    