<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<div class="main group">
		<?php include_once VIEWS.'inc/nav.php'; ?>
		<!-- 组织架构 -->
		<div class="organization">
			<img src="<?php echo static_file('web/img/organization.jpg'); ?>" alt="组织架构">
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