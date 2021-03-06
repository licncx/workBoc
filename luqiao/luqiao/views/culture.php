<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<?php include_once VIEWS.'inc/nav.php'; ?>
	<div class="main culture">
		<!-- 企业文化 -->
		<div class="cultureList">
			<div class="item">
				<img src="<?php echo static_file('web/img/culture-img1.jpg'); ?>" alt="">
				<div class="num">
					<!-- <img src="<?php echo static_file('web/img/culture-num1.jpg'); ?>" alt=""> -->
					<h1>01</h1>
					<div class="txt">
						<h3>工作理念</h3>
						<p>寻求事物内在的本质规律作为解决问题的依据</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo static_file('web/img/culture-img2.jpg'); ?>" alt="">
				<div class="num">
					<!-- <img src="<?php echo static_file('web/img/culture-num2.jpg'); ?>" alt=""> -->
					<h1>02</h1>
					<div class="txt">
						<h3>企业目标</h3>
						<p>桥梁领域的著名架桥专家</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo static_file('web/img/culture-img1.jpg'); ?>" alt="">
				<div class="num">
					<!-- <img src="<?php echo static_file('web/img/culture-num3.jpg'); ?>" alt=""> -->
					<h1>03</h1>
					<div class="txt">
						<h3>企业信条</h3>
						<p>诚者 不勉而思 不思而得从容中道 圣人也</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo static_file('web/img/culture-img2.jpg'); ?>" alt="">
				<div class="num">
					<!-- <img src="<?php echo static_file('web/img/culture-num4.jpg'); ?>" alt=""> -->
					<h1>04</h1>
					<div class="txt">
						<h3>企业追求</h3>
						<p>立体倍增每个的商业价值</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="<?php echo static_file('web/img/culture-img1.jpg'); ?>" alt="">
				<div class="num">
					<!-- <img src="<?php echo static_file('web/img/culture-num5.jpg'); ?>" alt=""> -->
					<h1>05</h1>
					<div class="txt">
						<h3>企业希望</h3>
						<p>助推每个服务对象走向辉煌</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="公司概况"
		$(".header").find('.nav>ul>li').eq(0).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(0).css({"color":"#fff"})
		$("#culture").find('a').css("border-bottom","3px solid #0b5f92")
	$(window).scroll(function() {
		var scrollTop=$(window).scrollTop()
		var height=$(window).height()
		for(var i=0;i<($(".culture").find('.cultureList').find(".item")).length;i++){
			if(scrollTop>($(".culture").find('.cultureList').find(".item").eq(i).offset().top)-height+200){
				$(".culture").find('.cultureList').find(".item").eq(i).css({"padding":"0px","opacity":"1"})
			}
		}
	});
	</script>
</body>
</html>