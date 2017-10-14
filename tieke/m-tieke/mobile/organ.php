<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="organ">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('intro'); ?>">公司介绍></a>
			<a href="<?php echo site_url('organ'); ?>">组织机构</a>
		</div>
		<div class="content">
			<h3>组织架构</h3>
			<b></b>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	</body>
</html>