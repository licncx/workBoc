<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="welcome">
		<div class="banner">
			<div class="swiper-container">
			  <div class="swiper-wrapper">
			    <div class="swiper-slide">
			    	<a href="<?php echo site_url('contactUs'); ?>"><img src="<?php echo static_file('mobile/img/banner.jpg'); ?>" alt=""></a>
			    </div>
			    <div class="swiper-slide">
			    	<a href="<?php echo site_url('contactUs'); ?>"><img src="<?php echo static_file('mobile/img/banner.jpg'); ?>" alt=""></a>
			    </div>
			    <div class="swiper-slide">
			    	<a href="<?php echo site_url('contactUs'); ?>"><img src="<?php echo static_file('mobile/img/banner.jpg'); ?>" alt=""></a>
			    </div>
			  </div>
			  <div class="swiper-pagination"></div>
			</div>
		</div>
		<div class="wel-box1">
			<div class="items">
				<a href="">
					<img src="<?php echo static_file('mobile/img/box1-img1.png'); ?>" alt="">
					<h6>报名咨询</h6>
				</a>
			</div>
			<div class="items">
				<a href="">
					<img src="<?php echo static_file('mobile/img/box1-img2.png'); ?>" alt="">
					<h6>考试要点</h6>
				</a>
			</div>
			<div class="items">
				<a href="">
					<img src="<?php echo static_file('mobile/img/box1-img3.png'); ?>" alt="">
					<h6>学车流程</h6>
				</a>
			</div>
			<div class="items">
				<a href="">
					<img src="<?php echo static_file('mobile/img/box1-img4.png'); ?>" alt="">
					<h6>驭祥特色</h6>
				</a>
			</div>
			<div class="items">
				<a href="<?php echo site_url('faculty'); ?>">
					<img src="<?php echo static_file('mobile/img/box1-img5.png'); ?>" alt="">
					<h6>师资力量</h6>
				</a>
			</div>
		</div>
		<div class="wel-news">
			<div class="items-top">
				<div>
					<b></b>
					<h3>驭祥动态</h3>
				</div>
				<div>
					<b></b>
					<h3>行业新闻</h3>
				</div>
				<div>
					<b></b>
					<h3>考试公告</h3>
				</div>
			</div>
			<!-- 驭祥动态 -->
			<div class="items-box NewsBox">
				<div><img src="<?php echo static_file('mobile/img/news_1.jpg'); ?>" alt=""></div>
				<ol>
					<li><a href="<?php echo site_url('newsinfo'); ?>">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
				</ol>
			</div>
			<!-- 行业新闻 -->
			<div class="items-box">
				<div><img src="<?php echo static_file('mobile/img/news_2.jpg'); ?>" alt=""></div>
				<ol>
					<li><a href="<?php echo site_url('newsinfo'); ?>">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
				</ol>
			</div>
			<!-- 考试公告 -->
			<div class="items-box">
				<div><img src="<?php echo static_file('mobile/img/news_3.jpg'); ?>" alt=""></div>
				<ol>
					<li><a href="<?php echo site_url('newsinfo'); ?>">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
					<li><a href="">省运管局驾培处处长韦勇莅临我校检查督导驾</a></li>
				</ol>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		var mySwiper = new Swiper('.swiper-container', {
			// autoplay: 5000,//可选选项，自动滑动
			loop : true,
			paginationClickable :true,
			pagination: '.swiper-pagination',
		})
		$(".welcome").find('.wel-news').find('.items-top').find("div").click(function() {
			var _index=$(this).index()
			$(".welcome").find('.wel-news').find('.items-top').find("div").not($(this)).find('b').css("background","none")
			$(this).find('b').css("background","#eb7a00")
			$(".welcome").find('.wel-news').find('.items-box').not($(".welcome").find('.wel-news').find('.items-box').eq(_index)).css("display","none")
			$(".welcome").find('.wel-news').find('.items-box').eq(_index).css("display","block")
		});
	</script>
	</body>
</html>