<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="exam">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/exam.jpg'); ?>" alt="">
			<div>
				<h5>考试专区</h5>
				<p>The precinct of the exam</p>
			</div>
		</div>
		<div class="exam-box">
			<div class="left-nav">
				<ul>
					<h4>考试专区</h4>
					<li><a href="<?php echo site_url('exam'); ?>">科目一</a></li>
					<li><a href="">科目二</a></li>
					<li><a href="">科目三</a></li>
					<li><a href="">科目四</a></li>
					<li><a href="">考试安排</a></li>
					<li><a href="">考试要点</a></li>
				</ul>
			</div>
			<div class="exam-rt">
				<h4>科目一</h4>
				<div class="items">
					<div class="time"><span>2017-7-27</span></div>
					<div class="txt">
						<div class="circular">
							<img src="<?php echo static_file('web/img/circular.png'); ?>" alt="">
							<span></span>
						</div>
						<h5>新规定机动车小车科目一考试内容</h5>
						<p>一、道路交通安全法律、法规和规章：1.中华人民共和国道路交通安全法及实施条例。2.刑法。3.道路交通安全违法行为处理程序规定</p>
						<p>二、道路交通安全法律、法规和规章：1.中华人民共和国道路交通安全法及实施条例。2.刑法。3.道路交通安全违法行为处理程序规定</p>
					</div>
				</div>
				<div class="items">
					<div class="time"><span>2017-7-27</span></div>
					<div class="txt">
						<div class="circular">
							<img src="<?php echo static_file('web/img/circular.png'); ?>" alt="">
							<span></span>
						</div>
						<h5>八中交警手势信号口诀</h5>
						<p>一、道路交通安全法律、法规和规章：1.中华人民共和国道路交通安全法及实施条例。2.刑法。3.道路交通安全违法行为处理程序规定</p>
					</div>
				</div>
				<div class="items">
					<div class="time"><span>2017-7-27</span></div>
					<div class="txt">
						<div class="circular">
							<img src="<?php echo static_file('web/img/circular.png'); ?>" alt="">
							<span></span>
						</div>
						<h5>科目一理论考试易混淆、易错辨析</h5>
						<p>一、道路交通安全法律、法规和规章：1.中华人民共和国道路交通安全法及实施条例。2.刑法。3.道路交通安全违法行为处理程序规定</p>
					</div>
				</div>
				<div class="items">
					<div class="time"><span>2017-7-27</span></div>
					<div class="txt">
						<div class="circular">
							<img src="<?php echo static_file('web/img/circular.png'); ?>" alt="">
							<span></span>
						</div>
						<h5>科目一理论考试易混淆、易错辨析</h5>
						<p>一、道路交通安全法律、法规和规章：1.中华人民共和国道路交通安全法及实施条例。2.刑法。3.道路交通安全违法行为处理程序规定</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(4).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>