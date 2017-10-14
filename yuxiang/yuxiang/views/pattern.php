<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="pattern">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/pattern.jpg'); ?>" alt="">
			<div>
				<h5>学车模式</h5>
				<p>Model of learner`s learner</p>
			</div>
		</div>
		<div class="pattern-box">
			<div class="left-nav">
				<ul>
					<h4>学车模式</h4>
					<li><a href="<?php echo site_url('pattern'); ?>">学车明细</a></li>
					<li><a href="">学费标准</a></li>
					<li><a href="">VIP班</a></li>
				</ul>
			</div>
			<div class="pattern-rt">
				<h4>学车明细</h4>
				<p>1、学员缴费后，准备以下资料（收款收据、身份证复印件、原件、体检表、1寸白底彩照,增驾学员还需提供原始档案、驾驶证原件、驾驶信用证明,外地户口需办理暂住证），资料齐全后在业务大厅【信息录入处】录入考试信息及指纹、领取科目一教材，到【报名咨询】处制作、领取学员证。</p>
				<p>2、指纹录入7天后可到【微机室】预考科目一，预考成绩达96分以上，同时学时打卡满12学时后，业务科进行科目一正式考试约考，具体考试时间及地点以工作人员电话通知为准。</p>
				<p>3、科目一正式考试合格后，下周星期一在业务大厅【预约练车处】分配教练及车辆（除第一次预约外，以后每周练车预约可致电：2321232），至科目三考试合格后，练车结束。</p>
				<p>4、科目三考试合格后，进行3小时安全文明驾驶培训（站岗），最后进行科目四考试，科目四考试合格后三个工作日后到车管所二楼8号窗口领取驾驶证。</p>
				<p>注：科目一、四考试时间为每周星期五，科目二考试时间为每周星期二，科目三考试时间为每周星期一，安全文明驾驶培训时间为每周星期三，（因车管所考试安排只能提前一天受理，每个科目成功约考后，工作人员将电话通知第二天考试地点及时间，请学员保持电话畅通，以免耽误考试。）</p>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(3).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>