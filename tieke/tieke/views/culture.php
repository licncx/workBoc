<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="intro">
		<div class="intro-content">
			<div class="banner"><img src="<?php echo static_file('web/img/page-banner.jpg'); ?>" alt=""></div>
			<?php include_once VIEWS.'inc/current-date.php'; ?>
			<div class="content-lt">
				<div class="left-nav">
					<ul>
						<li class="menuHead"><a>企业文化</a></li>
						<li><a href="<?php echo site_url('culture'); ?>"><span>&#xe600;</span>企业精神</a></li>
						<li><a href=""><span>&#xe600;</span>企业风貌</a></li>
						<li><a href=""><span>&#xe600;</span>形象识别</a></li>
						<li><a href=""><span>&#xe600;</span>社会责任</a></li>
						<li><a href=""><span>&#xe600;</span>突出贡献</a></li>
						<li>
							<a href="javascript:void(0)"><span>&#xe600;</span>法规制度</a>
							<ol>
								<li><a href=""><span>&#xe600;</span>党规党纪</a></li>
								<li><a href=""><span>&#xe600;</span>国家法律</a></li>
								<li><a href=""><span>&#xe600;</span>规程规定</a></li>
								<li><a href=""><span>&#xe600;</span>企业制度</a></li>
							</ol>
						</li>
					</ul>
				</div>
			</div>
			<div class="content-box">
				<h3>企业精神</h3>
				<b></b>
				<p>四川铁科建设监理有限公司成立于1993年，是专门从事工程建设监理、工程技术咨询、工程项目管理的国有企业，是中国建设监理协会会员单位，中国土木工程协会会员单位，四川省建设监理协会理事单位，ISO9001：2008质量管理体系认证企业。获得中国建设监理创新发展20年工程监理先进企业、四川省优秀监理企业、四川省监理企业十强单位、成都市守合同重信用企业等荣誉。</p>
				<p>四川铁科建设监理有限公司主营业务：铁路工程、公路工程、隧道及地下工程、桥梁结构工程、水利电力工程、机电工程及其相关工程的建设监理业务，兼营铁道及相关工程的技术咨询、项目管理、施工监测等业务。1997年5月，被建设部批准为甲级监理资质单位；2001年2月获铁道部颁发建设监理许可证；2009年11月，经国家核定资质范围为：铁路工程（甲级）、市政公用工程（甲级）、公路工程（甲级）、房屋建筑工程（甲级）、机电安装工程（乙级）；2015年5月获得人防工程监理丙级资质。</p>
				<p>四川铁科建设监理有限公司在长大隧道（铁路、公路、市政）、特大桥梁（钢管拱桥、悬索桥、斜拉桥、钢结构桥）、深大基坑（城市轨道交通、房屋建筑）等工程施工监理方面专业优势突出，业绩丰富，已经成为我国铁路、公路、市政、城市轨道交通、房屋建筑等工程建设监理行业以及项目管理、建设管理咨询、施工技术咨询领域的一支重要力量。</p>
				<p>四川铁科建设监理有限公司的企业精神是“勇于跨越，追求卓越”，企业核心价值观是“诚信敬业，共建共享”，企业宗旨是“创新创效，优质发展”，企业使命是“奉献精品，服务民生”。将一贯秉承“严格监理，公平公正，优好合作，真诚守信”原则，以高素质的技术人才、先进的管理手段、良好的企业信誉为工程建设提供优质的技术服务，努力做到建一个工程，树一座丰碑，积极打造行业先进、管理一流的现代咨询企业。</p>
				<p>四川铁科建设监理有限公司致力于打造国内一流、具备国际竞争力的现代咨询服务企业。</p>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(5).css('background','#b90000')
		$(".left-nav").find('ul>li').eq(1).find('a').css("color","#d7edff")
	</script>
	</body>
</html>