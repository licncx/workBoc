$(document).ready(function() {
	$(".header").find('.nav').find('ul>li').hover(function (){
		if($(window).width()<=1280){
			$(".header").find('.nav').find('ul>li').last().find('ol').css("left","-96px")
		}
		$(".header").find('.bgc').stop(true,true)
		$(".header").find('.bgc').slideToggle()
		var liStr=$(this).find('ol>li').length
		$(this).find('ol').toggle().css("width",liStr*96+"px")
	})
	$(".page-banner").find('h5').animate({'margin-top': '0px',"opacity":"1"},1000);
	$(".page-banner").find('p').animate({'margin-top': '23px',"opacity":"1"},1000);
});