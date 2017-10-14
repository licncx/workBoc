<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="contact-way">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/contactUs.jpg'); ?>" alt="">
			<div>
				<h5>联系我们</h5>
				<p>You can leave a message here</p>
			</div>
		</div>
		<div class="contactWay-box">
			<div class="left-nav">
				<ul>
					<h4>联系我们</h4>
					<li><a href="<?php echo site_url('contactUs'); ?>">在线报名</a></li>
					<li><a href="<?php echo site_url('contact-way'); ?>">联系方式</a></li>
				</ul>
			</div>
			<div class="contactWay-rt">
				<h4>联系方式</h4>
				<div>
					<p>咨询电话：0825-2283586</p>
					<p>VIP热线：0825-2321232</p>
					<p>科目一、科目二：0825-2321517</p>
					<p>科目三、科目四：0825-2321102</p>
					<p>预约学车电话：0825-2321232</p>
					<p>预约考试电话：18782551285</p>
					<p>投诉电话：0825-2321023</p>
					<p>联系地址：遂宁市经济技术开发区火车站驭祥驾校（中央粮库旁) </p>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(7).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(1).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>