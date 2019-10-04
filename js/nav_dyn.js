
/*fonction permettant d'avoir un menu dynamique lors qu'on défile une page*/
$(document).ready(function() {
	
		$(window).scroll(function() {

		
	  	if($(document).scrollTop() >= 80 && $(window).width() > 1100 ) {

	    	$('#nav').addClass('shrink');
	    	$('#nav').removeClass('phone');


	   	 }

	   	 else if($(document).scrollTop() <= 1 && $(window).width() > 1100 ){
	     $('#nav').removeClass('shrink');
	     } 

	     
		
  	});
});

/*fonction permettant d'avoir un menu responsif sur téléphone*/
$(document).ready(function() {
	$(window).resize(function(){
		var width = $(window).width();
		if(width <  1100){
			$('#nav').addClass('phone');
			$('#nav').removeClass('shrink');

		}
	});

});





