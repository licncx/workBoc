<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 现浇施工平台 -->
	<div class="main product">
		<div class="navigation platform">
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
					<h3>现浇施工平台</h3>
					<p>CAST-IN-PLACE CONSTRUCTION PLATFORM</p>
				</div>
				<div class="describe">
					<p></p>
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