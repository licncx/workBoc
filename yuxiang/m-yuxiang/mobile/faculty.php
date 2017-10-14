<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="faculty">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('faculty'); ?>">师资力量></a>
			<a href="javascript:void(0)">A型教练</a>
			<input type="text"><button type="submit">搜索</button>
		</div>
		<div class="content">
			<div class="items">
				<a href="<?php echo site_url('facultyinfo'); ?>">
					<div class="portrait"><img src="<?php echo static_file('mobile/img/portrait.jpg'); ?>" alt=""></div>
				</a>
				<div class="txt">
					<h6>张三</h6>
					<p>合格率：<span>95%</span></p>
					<p>合格率排名：<span>03</span></p>
					<p>准教车型：<span>A2型</span></p>
					<p>号码：<span>123456789987</span></p>
				</div>
			</div>
			<div class="items">
				<a href="<?php echo site_url('facultyinfo'); ?>">
					<div class="portrait"><img src="<?php echo static_file('mobile/img/portrait.jpg'); ?>" alt=""></div>
				</a>
				<div class="txt">
					<h6>张三</h6>
					<p>合格率：<span>95%</span></p>
					<p>合格率排名：<span>03</span></p>
					<p>准教车型：<span>A2型</span></p>
					<p>号码：<span>123456789987</span></p>
				</div>
			</div>
			<div class="items">
				<a href="<?php echo site_url('facultyinfo'); ?>">
					<div class="portrait"><img src="<?php echo static_file('mobile/img/portrait.jpg'); ?>" alt=""></div>
				</a>
				<div class="txt">
					<h6>张三</h6>
					<p>合格率：<span>95%</span></p>
					<p>合格率排名：<span>03</span></p>
					<p>准教车型：<span>A2型</span></p>
					<p>号码：<span>123456789987</span></p>
				</div>
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