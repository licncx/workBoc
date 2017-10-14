<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="ebook">
		<div class="ebook-content">
			<div class="banner"><img src="<?php echo static_file('web/img/page-banner.jpg'); ?>" alt=""></div>
			<?php include_once VIEWS.'inc/current-date.php'; ?>
			<div class="ebook-lt">
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
			<div class="ebook-rt">
				<h3>企业画册</h3>
				<img src="<?php echo static_file('web/img/ebook-img1.jpg'); ?>" alt="">
				<div class="items">
					<img src="<?php echo static_file('web/img/click.png'); ?>" alt=""><a href="">点击查看企业画册</a>
				</div>
				<div class="bgc"></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(1).css('background','#b90000')
		$('.left-nav').find('li').eq(5).find('a').css("color","#d7edff")
	</script>
	</body>
</html>