<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="honor">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('intro'); ?>">公司介绍></a>
			<a href="<?php echo site_url('honor'); ?>">企业荣誉</a>
		</div>
		<div class="content">
			<h3>企业荣誉</h3>
			<div class="items">
				<img src="<?php echo static_file('mobile/img/honor-img1.png'); ?>" alt="">
				<p>奖一文字介绍处</p>
			</div>
			<div class="items">
				<img src="<?php echo static_file('mobile/img/honor-img2.png'); ?>" alt="">
				<p>奖一文字介绍处</p>
			</div>
			<div class="items">
				<img src="<?php echo static_file('mobile/img/honor-img3.jpg'); ?>" alt="">
				<p>杭州市复兴大桥（钱江四桥）</p>
				<p>荣获第六届詹天佑土木工程大奖</p>
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