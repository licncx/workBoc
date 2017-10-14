<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 技术资料 -->
	<div class="main technology">
		<div class="tec-content">
			<div class="itemList">
				<div class="itemList-lt"><img src="<?php echo static_file('web/img/technology-img1.jpg'); ?>" alt=""></div>
				<div class="itemList-rt">
					<h5>321”钢桥制造与检验规范</h5>
					<p>321”钢桥所使用的钢材，必须按图纸要求的材质、规格定货。每批进厂的钢材，必须有生产厂的产品质量证明书，以验证其化学成分和机械性能是否符合国标（GB）的规定。对无出厂证明书的钢材，必须按国标......</p>
					<h6><a href="#"><span class="download">&#xe600;</span>&nbsp;下载</a>日期：<span>2014-05-31</span></h6>
				</div>
			</div>
			<div class="itemList">
				<div class="itemList-lt"><img src="<?php echo static_file('web/img/technology-img1.jpg'); ?>" alt=""></div>
				<div class="itemList-rt">
					<h5>321”钢桥制造与检验规范</h5>
					<p>321”钢桥所使用的钢材，必须按图纸要求的材质、规格定货。每批进厂的钢材，必须有生产厂的产品质量证明书，以验证其化学成分和机械性能是否符合国标（GB）的规定。对无出厂证明书的钢材，必须按国标......</p>
					<h6><a href="#"><span class="download">&#xe600;</span>&nbsp;下载</a>日期：<span>2014-05-31</span></h6>
				</div>
			</div>
			<div class="itemList">
				<div class="itemList-lt"><img src="<?php echo static_file('web/img/technology-img1.jpg'); ?>" alt=""></div>
				<div class="itemList-rt">
					<h5>321”钢桥制造与检验规范</h5>
					<p>321”钢桥所使用的钢材，必须按图纸要求的材质、规格定货。每批进厂的钢材，必须有生产厂的产品质量证明书，以验证其化学成分和机械性能是否符合国标（GB）的规定。对无出厂证明书的钢材，必须按国标......</p>
					<h6><a href="#"><span class="download">&#xe600;</span>&nbsp;下载</a>日期：<span>2014-05-31</span></h6>
				</div>
			</div>
			<div class="itemList">
				<div class="itemList-lt"><img src="<?php echo static_file('web/img/technology-img1.jpg'); ?>" alt=""></div>
				<div class="itemList-rt">
					<h5>321”钢桥制造与检验规范</h5>
					<p>321”钢桥所使用的钢材，必须按图纸要求的材质、规格定货。每批进厂的钢材，必须有生产厂的产品质量证明书，以验证其化学成分和机械性能是否符合国标（GB）的规定。对无出厂证明书的钢材，必须按国标......</p>
					<h6><a href="#"><span class="download">&#xe600;</span>&nbsp;下载</a>日期：<span>2014-05-31</span></h6>
				</div>
			</div>
			<div class="itemList">
				<div class="itemList-lt"><img src="<?php echo static_file('web/img/technology-img1.jpg'); ?>" alt=""></div>
				<div class="itemList-rt">
					<h5>321”钢桥制造与检验规范</h5>
					<p>321”钢桥所使用的钢材，必须按图纸要求的材质、规格定货。每批进厂的钢材，必须有生产厂的产品质量证明书，以验证其化学成分和机械性能是否符合国标（GB）的规定。对无出厂证明书的钢材，必须按国标......</p>
					<h6><a href="#"><span class="download">&#xe600;</span>&nbsp;下载</a>日期：<span>2014-05-31</span></h6>
				</div>
			</div>
			<div class="more"><button>READ MORE</button></div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="技术资料"
		$(".header").find('.nav>ul>li').eq(4).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(4).css({"color":"#fff"})
	$(window).scroll(function() {
		var scrollTop=$(window).scrollTop()
		var height=$(window).height()
		for(var i=0;i<($(".technology").find('.itemList')).length;i++){
			if(scrollTop>($(".technology").find('.itemList').eq(i).offset().top)-height+200){
				$(".technology").find('.itemList').eq(i).css({"padding":"0px","opacity":"1"})
			}
		}
	});
	</script>
</body>
</html>