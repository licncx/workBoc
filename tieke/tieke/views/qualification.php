<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="qualification">
		<div class="qf-content">
			<div class="banner"><img src="<?php echo static_file('web/img/page-banner.jpg'); ?>" alt=""></div>
			<?php include_once VIEWS.'inc/current-date.php'; ?>
			<div class="qf-lt">
				<div class="left-nav">
					<ul>
						<li class="menuHead"><a href="javascript:void(0)">公司介绍</a></li>
						<li><a href="<?php echo site_url('intro'); ?>"><span>&#xe600;</span>公司简介</a></li>
						<li><a href="<?php echo site_url('organ'); ?>"><span>&#xe600;</span>组织机构</a></li>
						<li><a href="<?php echo site_url('qualification'); ?>"><span>&#xe600;</span>企业资质</a></li>
						<li><a href="<?php echo site_url('honor'); ?>"><span>&#xe600;</span>企业荣誉</a></li>
						<li><a href="<?php echo site_url('ebook'); ?>"><span>&#xe600;</span>企业画册</a></li>
					</ul>
				</div>
			</div>
			<div class="qf-rt">
				<h3>企业资质</h3>
				<b></b>
				<div class="items">
					<div class="items-img"><img src="<?php echo static_file('web/img/qualification-img1.jpg'); ?>" alt=""></div>
					<div class="items-txt">
						<span>房屋建筑工程监理甲级</span>
						<span>铁路工程监理甲级</span>
						<span>公路工程监理甲级</span>
						<span>市政公用工程监理甲级</span>
						<span>可以开展相应类别建设工程的项目管理</span>
						<span>技术咨询等业务</span>
					</div>
				</div>
				<div class="items">
					<div class="items-img"><img src="<?php echo static_file('web/img/qualification-img2.jpg'); ?>" alt=""></div>
					<div class="items-txt">
						<span>房屋建筑工程监理甲级</span>
						<span>铁路工程监理甲级</span>
						<span>公路工程监理甲级</span>
						<span>市政公用工程监理甲级</span>
						<span>可以开展相应类别建设工程的项目管理</span>
						<span>技术咨询等业务</span>
					</div>
				</div>
				<div class="items-btm">
					<div><img src="<?php echo static_file('web/img/qualification-img3.jpg'); ?>" alt=""></div>
					<div><img src="<?php echo static_file('web/img/qualification-img3.jpg'); ?>" alt=""></div>
					<div><img src="<?php echo static_file('web/img/qualification-img3.jpg'); ?>" alt=""></div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(1).css('background','#b90000')
		$('.left-nav').find('li').eq(3).find('a').css("color","#d7edff")
	</script>
	</body>
</html>