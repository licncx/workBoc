<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<?php include_once VIEWS.'inc/nav.php'; ?>
	<div class="group">
		<img src="<?php echo static_file('mobile/img/framework-img.jpg'); ?>" alt="">
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$("#place").html("公司概况")
		$(".navigation").find('ul>li>a').eq(3).css("border-bottom","0.05rem solid #0b5f92");
	</script>
</body>
</html>