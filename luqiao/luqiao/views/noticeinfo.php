<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 公告详情 -->
	<div class="main noticeinfo">
		<div class="navigation noticeNav">
			<div class="menu">
				<ul>
					<li><a href="<?php echo site_url('news'); ?>">新闻聚焦</a></li>
					<li><a href="<?php echo site_url('notice'); ?>">通知公告</a></li>
				</ul>
			</div>
		</div>
		<div class="info-content">
			<div class="details-head">
				<h3>四川简阳华冶路桥工程有限公司</h3>
				<p>作者：<span>四川简阳华冶路桥工程有限公司</span>日期：<span>2017.05.31</span></p>
			</div>
			<div class="details">
				<p>四川简阳华冶路桥工程有限公司座落于成都市简阳市太平桥镇318国道边，距成都第二绕城高速出口1公里，距成都35公里，高速直达，交通便利。以四川为中心，西南.西北和华中市场同步发展，打造中国西南地区最专业的装配式公路钢桥行业领导品牌。</p>
				<img src="<?php echo static_file('web/img/newinfo-img1.jpg'); ?>" alt="新闻详情">
				<p>主营业务321型装配式公路钢桥.200型装配式式公路钢桥及大跨度装配式公路钢桥的设计及生产销售.材料设备的租赁安装及拆除.交通安全设施项目的施工.钢结构桥梁加工及防腐处理物资设备回收等业务。</p>
				<p>公司将继续秉承“诚信、合作、公平、共赢”的核心理念，以适应市场需求为基础；以“崇尚责任、精诚团结、不断超越、共享未来”的企业精神，以“诚信经商 ”优质服务”的经营原则，为实现企业与时代共同前进、企业与客户共创价值、企业与员工共同发展而努力，诚挚期待与各工程客户及商业合作伙伴的合作，互惠共赢，相互携手，共创行业新辉煌！</p>
			</div>
			<div class="Details-tail">
				<div class="tail-left">
					<p>上一条：<a href="">某某某赴阿尔及利亚视察海外项目</a></p>
					<p>下一条：<a href="">某某某赴北京视察项目</a></p>
				</div>
				<div class="tail-rt"><button><a href="<?php echo site_url('notice'); ?>">返回列表</a></button></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="新闻公告";
		$(".header").find('.nav>ul>li').eq(1).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(1).css({"color":"#fff"})
	</script>
</body>
</html>