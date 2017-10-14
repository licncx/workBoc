// 导航
$(window).load(function() {
	$(".header").find('.wrap').find('img').click(function() {
		$(".header").find('.nav').slideToggle()
		$(".nav").find('ul>li>a').next().slideUp()
		$(".nav").find('ul>li>a').css("background","#fff")
		$(".nav").find('ul>li>a').find('span').css("color","#666666")
		$(".nav").find('ul>li>a').find('b').html("&#xe603;")
	});
	$(".nav").find('ul>li>a').click(function() {
		$(".nav").find('ul>li>a').not($(this)).next().slideUp()
		$(this).next().slideToggle(function(){
			if($(this).css("display")=="block"){
				$(".nav").find('ul>li>a').not($(this).prev()).css({"background":"#fff"})
				$(".nav").find('ul>li>a').not($(this).prev()).find('span').css("color","#666666")
				$(".nav").find('ul>li>a').not($(this).prev()).find('b').html("&#xe603;")
				$(this).prev().css({"background":"#f7f7f7"})
				$(this).prev().find('span').css("color","#01406c")
				$(this).prev().find('b').html("&#xe600;")
			}else if($(this).css("display")=="none"){
				$(this).prev().css("background","#fff")
				$(this).prev().find('span').css("color","#666666")
				$(this).prev().find('b').html("&#xe603;")
			}
		})
	});
});