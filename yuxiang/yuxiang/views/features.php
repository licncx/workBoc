<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="features">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/pattern.jpg'); ?>" alt="">
			<div>
				<h5>特色介绍</h5>
				<p>The precinct of the exam</p>
			</div>
		</div>
		<div class="features-box">
			<div class="left-nav">
				<ul>
					<h4>特色介绍</h4>
					<li><a href="<?php echo site_url('features'); ?>">主题讲座</a></li>
					<li><a href="">训考一体</a></li>
					<li><a href="">VIP班</a></li>
				</ul>
			</div>
			<div class="features-rt">
				<h4>主题讲座</h4>
				<p>我校从2013年6月正式面向社会招收学员，经过近两年的努力，先后建成了小车科目二玉堂考训场、大小车科目二回马考训场、大小车科目三月山考训场。</p>
				<p>社会化考场的建设为我校能够为学员提供考训一体化的服务提供了成熟的条件。同时极大方便了我校学员的练车和考试。为我校学员能够更方便的使用考试场地和车辆进行更规范的练习提供了极大便利，为我校学员节约了熟悉场地和考试设备的支出。</p>
				<p>培训：训练过程教练员严格按照运管部门对培训学时和公安部对驾驶技能的要求对学员进行训练，保证每一位学员能够学到足够的驾驶技能，根据每位学员的接受程度合理的安排教学。在平时的训练中，学员使用玉堂考训场进行训练和模拟考试，场地项目设计和尺寸标准与回马考场一致，为学员节约学车时间。</p>
				<p>考试：学习过程中，教练员根据学员驾驶技能的熟练程度判断，对满足考试技能要求的学员由学校统一安排学员到回马考场（科目二）和月山考场（科目三）进行考试车辆的熟悉并进行模拟考试。考试设备车辆由学校安排并免费提供给本校学员使用，安排专门的考试安全人员全程指导学员，详细讲解电子化考试各项目的考试要点和注意事项，目的只为学员能够准确、高效的掌握考试流程和安全驾驶相关细节，确保学员考试能够成功。</p>
				<p>完善的培训场地和考试场地是我校在遂宁驾培行业中的一大优势，为学员掌握驾驶技术和快速高效的通过考试提供了保障，得到广大学员的一致认可。我们将努力为每位学员创造公平、公正、透明的考试环境，努力让每一位学员满意。</p>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(5).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>