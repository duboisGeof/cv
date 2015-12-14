// JavaScript Document
$(document).ready(function () 
{
	$( ".soustitre" ).on( "click", function()
	{
        jQuery('.skillbar').each(function()
		{
			jQuery(this).find('.skillbar-bar').animate(
			{
				width:jQuery(this).attr('data-percent')
			},6000);
    	});	
	});
});




/*$(document).ready(function () 
{
	
        $( ".soustitre" ).one( "click", function() 
		{
  			if ( $( this ).is( ".skillbar" ) ) 
			{
    			jQuery('.skillbar').each(function()
		{
			jQuery(this).find('.skillbar-bar').animate(
			{
				width:jQuery(this).attr('data-percent')
			},6000);
    	});	
 			} 
			
  
  
});
	
});*/