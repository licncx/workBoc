$(window).load(function() {
	// 导航
	$(".nav").find('ul>li>a').click(function() {
		$(".nav").find('ul>li>a').not($(this)).next().slideUp()
		$(this).next().slideToggle(function(){
			if($(this).css("display")=="block"){
				$(".nav").find('ul>li>a').not($(this).prev()).find('b').html("&#xe76e;")
				$(this).prev().find('b').html("&#xe664;")
			}else if($(this).css("display")=="none"){
				$(this).prev().find('b').html("&#xe76e;")
			}
		})
	});
	$(".menu").find('.close').find('img').click(function() {
		$(".nav").find('ul>li>a').next().slideUp()
		$(".nav").find('ul>li>a').find('b').html("&#xe76e;")
		$(".header").find('.menu').animate({"left": "-5.1rem"}, 300)
	});
	$(".header").find('.wrap>img').click(function() {
		$(".menu").css("min-height",$(window).height()+"px")
		$(".header").find('.menu').animate({"left": "0rem"}, 300)
	});
});