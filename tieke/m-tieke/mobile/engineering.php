<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="engineering">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('engineering'); ?>">业务领域></a>
			<a href="<?php echo site_url('engineering'); ?>">铁路工程</a>
		</div>
		<div class="content">
			<h3>铁路工程</h3>
			<div class="items">
				<a href="">
					<div><img src="<?php echo static_file('mobile/img/02.jpg'); ?>" alt=""></div>
					<span>青藏铁路</span>
				</a>
			</div>
			<div class="items">
				<a href="">
					<div><img src="<?php echo static_file('mobile/img/03.jpg'); ?>" alt=""></div>
					<span>兰新高铁甘青段</span>
				</a>
			</div>
			<div class="items">
				<a href="">
					<div><img src="<?php echo static_file('mobile/img/01.jpg'); ?>" alt=""></div>
					<span>蒙华铁路</span>
				</a>
			</div>
		</div>
		<div class="paging">
			<ul>
				<li><a href="">首页</a></li>
				<li><a href="">上一页</a></li>
				<li><span>1</span>/<span>2</span></li>
				<li><a href="">下一页</a></li>
				<li><a href="">尾页</a></li>
			</ul>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	</body>
</html>