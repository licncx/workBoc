<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="contactUs">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/contactUs.jpg'); ?>" alt="">
			<div>
				<h5>联系我们</h5>
				<p>You can leave a message here</p>
			</div>
		</div>
		<div class="contactUs-box">
			<div class="left-nav">
				<ul>
					<h4>联系我们</h4>
					<li><a href="<?php echo site_url('contactUs'); ?>">在线报名</a></li>
					<li><a href="<?php echo site_url('contact-way'); ?>">联系方式</a></li>
				</ul>
			</div>
			<div class="contactUs-rt">
				<h4>在线报名</h4>
				<form action="">
					<input type="text" placeholder="姓名"><br>
					<input type="text" placeholder="电话"><br>
					<input type="text" placeholder="QQ"><br>
					<textarea cols="30" rows="10" placeholder="留言"></textarea><br>
					<button type="submit">提交</button><button type="reset">重置</button>
				</form>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(7).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>