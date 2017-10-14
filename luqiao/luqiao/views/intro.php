<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<div class="main intro">
		<?php include_once VIEWS.'inc/nav.php'; ?>
		<!-- 公司简介 -->
		<div class="introduce">
			<div class="introduceImg">
				<img src="<?php echo static_file('web/img/intro-img2.jpg'); ?>" alt="">
			</div>
			<div class="CompanyProfile">
				<div class="profile">
					<h4>四川简阳华冶路桥工程有限公司</h4>
					<span>SCJYHYLQ ENGINEERIG CO. LTD.</span>
					<p>四川简阳华冶路桥工程有限公司座落于成都市简阳市太平桥镇318国道边，距成都第二绕城高速出口1公里，距成都35公里，高速直达，交通便利。以四川为中心，西南.西北和华中市场同步发展，打造中国西南地区最专业的装配式公路钢桥行业领导品牌。</p>
					<p>主营业务321型装配式公路钢桥.200型装配式式公路钢桥及大跨度装配式公路钢桥的设计及生产销售.材料设备的租赁安装及拆除.交通安全设施项目的施工.钢结构桥梁加工及防腐处理物资设备回收等业务。</p>
					<p>公司将继续秉承“诚信、合作、公平、共赢”的核心理念，以适应市场需求为基础；以“崇尚责任、精诚团结、不断超越、共享未来”的企业精神，以“诚信经商 ”优质服务”的经营原则，为实现企业与时代共同前进、企业与客户共创价值、企业与员工共同发展而努力，诚挚期待与各工程客户及商业合作伙伴的合作，互惠共赢，相互携手，共创行业新辉煌！</p>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="公司概况"
		$(".header").find('.nav>ul>li').eq(0).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(0).css({"color":"#fff"})
	$(window).scroll(function() {
		var scrollTop=$(window).scrollTop()
		var height=$(window).height()
		if(scrollTop>($(".introduce").find('.CompanyProfile').offset().top)-height+200){
			$(".introduce").find('.CompanyProfile').css({"margin":"120px 0 0 335px","opacity":"1"})
		}
	});
	</script>
</body>
</html>