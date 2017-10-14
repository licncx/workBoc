<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="facultyinfo">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/faculty.jpg'); ?>" alt="">
			<div>
				<h5>师资力量</h5>
				<p>Teacher Resources</p>
			</div>
		</div>
		<div class="facultyinfo-box">
			<div class="left-nav">
				<ul>
					<h4>师资力量</h4>
					<li><a href="<?php echo site_url('faculty'); ?>">A型教练</a></li>
					<li><a href="">B型教练</a></li>
					<li><a href="">C型教练</a></li>
				</ul>
			</div>
			<div class="facultyinfo-rt">
				<div class="items">
					<h6>张三</h6>
					<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<p>合格率：<span>95%</span></p>
						<p>合格率排名：<span>03</span></p>
						<p>准教车型：<span>A2型</span></p>
						<p>号码：<span>13456788765</span></p>
						<p>车牌：<span>川J2207</span></p>
						<p>自我介绍：<span>我就是我，我是不一样的烟火</span></p>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	</body>
</html>