<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 产品展示 200型钢桥 -->
	<div class="main product">
		<div class="navigation listone">
			<div class="menu">
				<ul>
					<li><a href="<?php echo site_url('product'); ?>">200型钢桥</a></li>
					<li><a href="<?php echo site_url('steelbridge'); ?>">321型钢桥</a></li>
					<li><a href="<?php echo site_url('attachment'); ?>">钢桥附件</a></li>
					<li><a href="<?php echo site_url('zhanqiao'); ?>">施工栈桥</a></li>
					<li><a href="<?php echo site_url('platform'); ?>">现浇施工平台</a></li>
				</ul>
			</div>
		</div>
		<div class="pro-items">
			<div class="modeltop">
				<div class="detail">
					<h3>200型装配式公路钢桥</h3>
					<p>TYPE 200 FABRICATED HIGHWAY<br>STERL BRIDGE</p>
				</div>
				<div class="describe">
					<p>200型钢桥的外形与321钢桥的外形基本相同，但桁架高度从321钢桥的1.4米增加到2.134米，从而增加了桁架的承载能力，强度提高了33%，刚度提高了2.3倍，钢材使用量比321钢桥节约了30%左右。另外，该桥还改善了桥面、支承和联接系统，提高了桥梁的整体稳定性，因此ZB-200型钢桥可作为永久性或半永久性桥梁使用。</p>
					<p>200型钢桥桥面净宽为4.2m，除了可以组装单车道桥梁外，还可以组装成双车道桥梁，双车道桥面净宽为7.56m，因而这种钢桥更加适合民用。单车道时可架设9m到69m范围内的简支梁桥，双车道时可架设9m到48m范围内的简支梁桥。钢桥组合形式共有十一种，通过增加少量构件，这种钢桥还能用于吊桥、浮桥、多跨桥等。</p>
				</div>
			</div>
			<div class="modelbtm">
				<div class="modelbtm-one"><img src="<?php echo static_file('web/img/pro-img1.jpg'); ?>" alt=""></div>
				<div class="modelbtm-two"><img src="<?php echo static_file('web/img/pro-img2.jpg'); ?>" alt=""></div>
				<div><img src="<?php echo static_file('web/img/pro-img3.jpg'); ?>" alt=""></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="产品展示"
		$(".header").find('.nav>ul>li').eq(2).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(2).css({"color":"#fff"})
	</script>
</body>
</html>