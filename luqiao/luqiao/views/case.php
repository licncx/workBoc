<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
		<!-- 工程案例 -->
		<div class="main workcase">
			<div class="case">
				<div class="line">
					<div><img src="<?php echo static_file('web/img/case1.jpg'); ?>" alt=""></div>
					<div><span>200型三排加强型钢桥</span></div>
				</div>
				<div class="line">
					<div><img src="<?php echo static_file('web/img/case2.jpg'); ?>" alt=""></div>
					<div><span>200型三排加强型钢桥</span></div>
				</div>
				<div class="line">
					<div><img src="<?php echo static_file('web/img/case3.jpg'); ?>" alt=""></div>
					<div><span>200型三排加强型钢桥</span></div>
				</div>
				<div class="line">
					<div><img src="<?php echo static_file('web/img/case4.jpg'); ?>" alt=""></div>
					<div><span>200型三排加强型钢桥</span></div>
				</div>
				<div class="line">
					<div><img src="<?php echo static_file('web/img/case5.jpg'); ?>" alt=""></div>
					<div><span>200型三排加强型钢桥</span></div>
				</div>
				<div class="line">
					<div><img src="<?php echo static_file('web/img/case6.jpg'); ?>" alt=""></div>
					<div><span>200型三排加强型钢桥</span></div>
				</div>
			</div>
				<div class="more"><button>READ MORE</button></div>
		</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="工程案例"
		$(".header").find('.nav>ul>li').eq(3).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(3).css({"color":"#fff"})
	</script>
</body>
</html>