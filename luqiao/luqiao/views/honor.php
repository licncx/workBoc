<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<div class="main aptitude">
		<?php include_once VIEWS.'inc/nav.php'; ?>
		<!-- 资质荣誉 -->
		<div class="apt-content">
			<div class="item">
				<img src="<?php echo static_file('web/img/aptitude-img1.jpg'); ?>" alt="营业执照">
				<div><span>营业执照（副本）</span></div>
			</div>
			<div class="item">
				<img src="<?php echo static_file('web/img/aptitude-img2.jpg'); ?>" alt="营业执照">
				<div class="permit"><span>营业执照</span></div>
			</div>
			<div class="item">
				<img class="licence" src="<?php echo static_file('web/img/aptitude-img3.jpg'); ?>" alt="开户许可证">
				<div><span>开户许可证</span></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="公司概况"
		$(".header").find('.nav>ul>li').eq(0).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(0).css({"color":"#fff"})
	</script>
</body>
</html>