<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 321型钢桥 -->
	<div class="main product">
		<div class="navigation steelbridge">
			<div class="menu">
				<ul>
					<li><a href="<?php echo site_url('product'); ?>">200型钢桥</a></li>
					<li><a href="<?php echo site_url('steelbridge'); ?>">321型钢桥</a></li>
					<li><a href="<?php echo site_url('attachment'); ?>">钢桥附件</a></li>
					<li><a href="<?php echo site_url('zhanqiao'); ?>">施工栈桥</a></li>
					<li><a href="<?php echo site_url('platform'); ?>">现浇施工平台</a></li>
				</ul>
			</div>
		</div>
		<div class="pro-items">
			<div class="modeltop">
				<div class="detail">
					<h3>321型装配式公路钢桥</h3>
					<p>TYPE 321 FABRICATED HIGHWAY<br>STERL BRIDGE</p>
				</div>
				<div class="describe">
					<p>321钢桥是一种可分解的、能快速架设的制式桥梁，全桥采用高强钢全焊制成，主梁为可分解的轻型桁架，桁架间用单销连接，构件互换性强，重量较轻，运输拆装方便，还可根据跨径和通载要求组装成各型装配式钢桥，是一种被广泛应用的较为完善的应急交通保障组合装配式钢桥。</p>
					<p></p>
				</div>
			</div>
			<div class="modelbtm">
				<div class="modelbtm-one"><img src="<?php echo static_file('web/img/pro-img1.jpg'); ?>" alt=""></div>
				<div class="modelbtm-two"><img src="<?php echo static_file('web/img/pro-img2.jpg'); ?>" alt=""></div>
				<div><img src="<?php echo static_file('web/img/pro-img3.jpg'); ?>" alt=""></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="产品展示"
		$(".header").find('.nav>ul>li').eq(2).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(2).css({"color":"#fff"})
	</script>
</body>
</html>