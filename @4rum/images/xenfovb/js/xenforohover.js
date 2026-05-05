// Created by traitimphutho.net

jQuery.noConflict();

jQuery(document).ready(function($){

	$('a[href=#top], a[href=#ipboard_body]').click(function(){
		$('html, body').animate({scrollTop:0}, 400);
        return false;
	});
	
	$(".forumtitle").hover(function() {
		$(this).next(".hoverby_traitimphutho_net").children(".hoverby_born").stop()
		.animate({left: "0", opacity:1}, "fast")
		.css("display","block")
	}, function() {
		$(this).next(".hoverby_traitimphutho_net").children(".hoverby_born").stop()
		.animate({left: "10", opacity: 0}, "fast", function(){
			$(this).hide();
		})
	});
	
	$('#topicViewBasic').click(function(){
		$(this).addClass("active");
		$('#topicViewRegular').removeClass("active");
		$("#customize_topic").addClass("basicTopicView");
		$.cookie('ctv','basic',{ expires: 365, path: '/'});
		return false;
	});
	
	$('#topicViewRegular').click(function(){
		$(this).addClass("active");
		$('#topicViewBasic').removeClass("active");
		$("#customize_topic").removeClass("basicTopicView");
		$.cookie('ctv',null,{ expires: -1, path: '/'});
		return false;
	});
	
	if ( ($.cookie('ctv') != null))	{
		$("#customize_topic").addClass("basicTopicView");
		$("#topicViewBasic").addClass("active");
	}
	else{
		$("#topicViewRegular").addClass("active");
	}
	
	/* $.fn.stickyfloat = function(options, lockBottom) {
		var $obj 				= this;
		var parentPaddingTop 	= parseInt($obj.parent().css('padding-top'));
		var startOffset 		= $obj.parent().offset().top;
		var opts 				= $.extend({ startOffset: startOffset, offsetY: parentPaddingTop, duration: 200, lockBottom:true }, options);
		
		$obj.css({ position: 'absolute' });
		
		if(opts.lockBottom){
			var bottomPos = $obj.parent().height() - $obj.height() + parentPaddingTop;
			if( bottomPos < 0 )
				bottomPos = 0;
		}
		
		$(window).scroll(function () { 
			$obj.stop(); 
	
			var pastStartOffset			= $(document).scrollTop() > opts.startOffset;	
			var objFartherThanTopPos	= $obj.offset().top > startOffset;	
			var objBiggerThanWindow 	= $obj.outerHeight() < $(window).height();	
	
			if( (pastStartOffset || objFartherThanTopPos) && objBiggerThanWindow ){ 
				var newpos = ($(document).scrollTop() -startOffset + opts.offsetY );
				if ( newpos > bottomPos )
					newpos = bottomPos;
				if ( $(document).scrollTop() < opts.startOffset ) 
					newpos = parentPaddingTop;
	
				$obj.animate({ top: newpos }, opts.duration );
			}
		});
	};
	
	$('#primary_nav').each(function(){
		$(this).stickyfloat({ duration: 0 });
	}); */

});