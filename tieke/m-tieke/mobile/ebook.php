<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="ebook">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('intro'); ?>">公司介绍></a>
			<a href="<?php echo site_url('ebook'); ?>">企业画册</a>
		</div>
		<div class="content">
			<h3>企业画册</h3>
			<div class="items">
				<a href=""><img src="<?php echo static_file('mobile/img/click.png'); ?>" alt="">点击查看企业画册</a>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	</body>
</html>