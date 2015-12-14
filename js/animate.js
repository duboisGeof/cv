// JavaScript Document
$(document).ready(function()
  {
	  
	  $("#menu li a").mouseenter(function()
		{
			$(this).animate({bottom:"10px"});
		});
		
		$("#menu li a").mouseleave(function()
			{
				$(this).animate({bottom:"-7px"});
				$(this).animate({bottom:"0"});
			});	
	$("#social img").mouseenter(function()
		{
			$(this).animate({opacity:"0.25"}, {queue:false});
			$(this).animate({bottom:'10px'}, {queue:false})
			
		});
			
		$("#social img").mouseleave(function()
			{
				$(this).animate({opacity:"1"});
				$(this).animate({bottom:"-7px"});
				$(this).animate({bottom:"0"});
	
			});
		
	$("#accordeon .titre").mouseenter(function()
		{
			$(this).stop().animate({marginLeft:"10px"},0);
			
		});
			
		$("#accordeon .titre").mouseleave(function()
			{
				$(this).stop().animate({marginLeft:"0px"},0);
	
			});
	
	$(".detail").hide();
	$(".resumer").hide();

	$(".work").mouseenter(function()
		{
			$(this).find(".detail").stop().fadeTo(300,1);
			$(".resumer").show();
		});

	$(".work").mouseleave(function()
		{
			$(this).find(".detail").stop().fadeTo(300,0);
			$(".resumer").hide();
		});
	
	 
});

