<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="qualification">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('intro'); ?>">公司介绍></a>
			<a href="<?php echo site_url('qualification'); ?>">企业资质</a>
		</div>
		<div class="content">
			<h3>企业资质</h3>
			<b></b>
			<div><img src="<?php echo static_file('mobile/img/qualification-img1.jpg'); ?>" alt=""></div>
			<div><img src="<?php echo static_file('mobile/img/qualification-img2.jpg'); ?>" alt=""></div>
			<div><img src="<?php echo static_file('mobile/img/qualification-img3.jpg'); ?>" alt=""></div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	</body>
</html>