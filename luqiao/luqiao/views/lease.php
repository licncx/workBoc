<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 租赁服务 -->
	<div class="main lease">
		<div class="lea-content">
			<div class="serveimg">
				<img src="<?php echo static_file('web/img/lease-img1.jpg'); ?>" alt="">
			</div>
			<div class="serve">
				<h3>租赁服务</h3>
				<span>RENTAL SERVICE</span>
				<p>贝雷梁作为支架具有方便快捷、安全、可靠、不受地形限制成本低于可反复使用等特点，已广泛用于桥梁、铁路、公C路、建设。为配合国家建设的需要，满足客户的需求，公司实行销售、租赁施工共同发展的经营模式。</p>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="租赁服务"
		$(".header").find('.nav>ul>li').eq(5).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(5).css({"color":"#fff"})
	$(window).scroll(function() {
		var scrollTop=$(window).scrollTop()
		var height=$(window).height()
		if(scrollTop>($(".lease").find('.serve').offset().top)-height+200){
			$(".lease").find('.serve').css({"right":"0","opacity":"1"})
		}
	});
	</script>
</body>
</html>