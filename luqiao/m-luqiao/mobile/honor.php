<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<?php include_once VIEWS.'inc/nav.php'; ?>
	<div class="aptitude">
		<div class="item">
			<img src="<?php echo static_file('mobile/img/honor-img1.jpg'); ?>" alt="营业执照">
			<div><span>营业执照（副本）</span></div>
		</div>
		<div class="item">
			<img src="<?php echo static_file('mobile/img/honor-img2.jpg'); ?>" alt="营业执照">
			<div><span>营业执照</span></div>
		</div>
		<div class="item">
			<img src="<?php echo static_file('mobile/img/honor-img3.jpg'); ?>" alt="开户许可证">
			<div><span>开户许可证</span></div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$("#place").html("公司概况")
		$(".navigation").find('ul>li>a').eq(1).css("border-bottom","0.05rem solid #0b5f92");
	</script>
</body>
</html>