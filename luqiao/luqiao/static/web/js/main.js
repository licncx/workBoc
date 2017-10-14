$(window).load(function() {
	// welocme
	$(".carousel").find('.bannertxt').css({"margin":"0","opacity":"1"})
	// intro
	$(".CompanyProfile").find('.profile').find("p").first().show(function introShow(){
		$(this).next("p").show(introShow)
		$(this).css("opacity","1")
	})
	// product
	$(".product").find('.describe').find('p').first().show(function productShow(){
		$(this).next("p").show(productShow)
		$(this).css({"opacity":"1","margin-top":"0px"})
	})
});