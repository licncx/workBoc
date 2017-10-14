<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="contactUs">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('contactUs'); ?>">联系我们></a>
			<a href="<?php echo site_url('contactUs'); ?>">在线报名</a>
		</div>
		<div class="content">
			<h3>在线报名</h3>
			<span>驭祥驾校感谢您的信赖!</span>
			<form action="">
				<input type="text" placeholder="姓名">
				<input type="text" placeholder="电话">
				<input type="text" placeholder="QQ">
				<input type="text" placeholder="备注">
				<button type="submit">提交</button>
			</form>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	</body>
</html>