$(function(){
	var h1Name=$('#content h1').text();
	
	//nav
	if(h1Name=='OVERVIEW'||h1Name=='SCHEDULE'||h1Name=='TRANSPORTATION'){
		$('.navbar-default .navbar-nav>li').eq(0).addClass('active');
	}else if(h1Name=='ALL PHOTO'){
		$('.navbar-default .navbar-nav>li').eq(1).addClass('active');
	}else if(h1Name=='ABOUT'){
		$('.navbar-default .navbar-nav>li').eq(2).addClass('active');
	}


	$(window).scroll(function(){
		if($(this).scrollTop() == 0) {
			$('.navbar-default').css({'box-shadow':'none','-moz-box-shadow':'none','-webkit-box-shadow':'none'});
		}
		else{
			$('.navbar-default').css({'box-shadow':'0px 0px 5px rgba(0,0,0,0.2)','-moz-box-shadow':'0px 0px 5px rgba(0,0,0,0.2)','-webkit-box-shadow':'0px 0px 5px rgba(0,0,0,0.2)'});
		}
	});

	//subnav
	$("#subnav .list-group-item:contains(" + h1Name + ")").addClass('active');
	
	//
	$('.scroll-to-top').on({
		click:function(e){
			e.preventDefault();
			$('html, body').stop().animate({scrollTop: 0}, 150);
		}
	});
	
});
