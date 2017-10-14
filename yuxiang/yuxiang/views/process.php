<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="process">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/process.jpg'); ?>" alt="">
			<div>
				<h5>学车流程</h5>
				<p>The process of learning a learner</p>
			</div>
		</div>
		<div class="process-box">
			<div class="left-nav">
				<ul>
					<h4>学车流程</h4>
					<li><a href="<?php echo site_url('process'); ?>">报名咨询</a></li>
					<li><a href="">照相体检</a></li>
					<li><a href="">理论阶段</a></li>
					<li><a href="">上车阶段</a></li>
					<li><a href="">驾照领取</a></li>
				</ul>
			</div>
			<div class="process-rt">
				<h4>报名咨询</h4>
				<ol>
					<li>
						<h3>理论学习</h3>
						<p>我校设有科目一和科目四理论学习室和预考区域，学员可以在报名后携带学员证到校学习理论。也可以在家里使用电脑或手机下载“驾考宝典”进行学习。</p>
					</li>
					<li>
						<h3>理论考试</h3>
						<p>指纹录入7天后可进行预考科目一，预考成绩达96分以上，同时学时打卡满12学时后，业务科进行科目一正式考试约考，科目四预考成绩达98分以上，业务科进行科目四正式考试预约考，具体考试时间及地点以工作人员电话通知为准。</p>
					</li>
				</ol>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(1).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>