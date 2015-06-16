$(document).ready(function() {
	$('#progress').addClass('running');	    
		$('.trigger').click(function() {
			$('#progress').removeClass('running').delay(10).queue(function(next){
				$(this).addClass('running');
		        next();
		    });
		    return false;
		});
});
