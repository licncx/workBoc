<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="intro">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/intro-img1.jpg'); ?>" alt="">
			<div>
				<h5>走进驭祥</h5>
				<p>About YuXiang Driving school</p>
			</div>
		</div>
		<div class="intro-box">
			<div class="left-nav">
				<ul>
					<h4>走进驭祥</h4>
					<li><a href="<?php echo site_url('intro'); ?>">驾校简介</a></li>
					<li><a href="">校长致辞</a></li>
					<li><a href="">领导关怀</a></li>
					<li><a href="">组织架构</a></li>
					<li><a href="">领导风采</a></li>
				</ul>
				<div><a href="">快捷入口一</a></div>
				<div><a href="">快捷入口二</a></div>
				<div><a href="">快捷入口三</a></div>
			</div>
			<div class="intro-rt">
				<h3>遂宁驭祥驾校简介</h3>
				<p>遂宁驭祥驾校是一所场地建设严谨，设施设备先进，教学培训规范的国家一级驾校，学校坚持“以人为本”的教学理念，贯彻“为社会服务，让学员满意”的办学方针，为社会培养优秀的驾驶人员</p>
				<p>学校目前建有 90余亩专业的汽车驾驶训练场地，拥有117台大中型客车、货车、牵引车及小型汽车等各种教学车辆，其中考试车26台。学校规模大，办学条件优越，训练场地规范，设施设备先进，功能完善。</p>
				<p>学校管理严格，服务周到，拥有一支经验丰富、技术过硬、纪律严明，经过正规培训，获得了准教资质的教练员队伍。学校狠抓廉政建设，坚决杜绝“吃、拿、卡、要”。致力把学校办成机动车驾驶员培训行业质量好、教学水平优的一流驾校。</p>
				<p>学校于2013年6月28日正式开班考试，大中型客车，货车、牵引车及小型汽车均可到校报名学习。</p>
				<p>选择驭祥驾校，畅行平安大道。</p>
				<div><img src="<?php echo static_file('web/img/intro-img2.jpg'); ?>" alt=""></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(0).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>