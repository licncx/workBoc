<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<div class="workcase">
		<div class="case">
			<div class="line">
				<img src="<?php echo static_file('mobile/img/case-img1.jpg'); ?>" alt="">
				<div><span>200型三排加强型钢桥</span></div>
			</div>
			<div class="line">
				<img src="<?php echo static_file('mobile/img/case-img2.jpg'); ?>" alt="">
				<div><span>321型装配式公路钢桥27米三排加强型</span></div>
			</div>
			<div class="line">
				<img src="<?php echo static_file('mobile/img/case-img3.jpg'); ?>" alt="">
				<div><span>321型装配式钢桥连续梁钢桥</span></div>
			</div>
		</div>
		<div class="more"><button>READ MORE</button></div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$("#place").html("技术资料")
	</script>
</body>
</html>