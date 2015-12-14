// JavaScript Document
$(document).ready(function () 
{
	$(".down").hide();
    $( ".contenue" ).slideUp( 0 );
	$( ".contenue2" ).slideUp( 0 );
 
    $(".titre").on( "click", function()
    {	
		if($(this).hasClass('active')){
			$(this).find(".up").hide();
			$(this).find(".down").show();
            $(this).removeClass('active');
			$(this).addClass('notactive');
        }
		else if($(this).hasClass('notactive')){
			$(this).find(".up").show();
			$(this).find(".down").hide();
            $(this).removeClass('notactive');
			$(this).addClass('active');
        }
		
		 $( this ).next( ".contenue, .contenue2" ).slideToggle();
    });

    $( ".soustitre" ).on( "click", function()
    {
		if($(this).hasClass('active')){
			$(this).find(".up").hide();
			$(this).find(".down").show();
            $(this).removeClass('active');
			$(this).addClass('notactive');
        }
		else if($(this).hasClass('notactive')){
			$(this).find(".up").show();
			$(this).find(".down").hide();
            $(this).removeClass('notactive');
			$(this).addClass('active');

        }
        $( this ).next( ".contenue" ).slideToggle();
    });
});
