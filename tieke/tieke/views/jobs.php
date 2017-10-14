<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="news">
		<div class="news-content">
			<div class="banner"><img src="<?php echo static_file('web/img/page-banner.jpg'); ?>" alt=""></div>
			<?php include_once VIEWS.'inc/current-date.php'; ?>
			<div class="content-lt">
				<div class="left-nav">
					<ul>
						<li class="menuHead"><a>人力资源</a></li>
						<li><a href="<?php echo site_url('human-resources'); ?>"><span>&#xe600;</span>专家团队</a></li>
						<li><a href=""><span>&#xe600;</span>教育培训</a></li>
						<li><a href=""><span>&#xe600;</span>人才概况</a></li>
						<li><a href="<?php echo site_url('jobs'); ?>"><span>&#xe600;</span>人才招聘</a></li>
						<li><a href="<?php echo site_url('labor-model'); ?>"><span>&#xe600;</span>劳模先进</a></li>
					</ul>
				</div>
			</div>
			<div class="content-rt">
				<div class="rt-box">
					<h3>人才招聘</h3>
					<div class="item">
						<a href="<?php echo site_url('jobsinfo'); ?>">
							<div class="item-lt"><img src="<?php echo static_file('web/img/news-img2.jpg'); ?>" alt=""></div>
							<div class="item-rt">
								<h5>人才招聘</h5>
								<p>7月7日，中铁科研院副总经理王国昌，财务会计部部长廖小龙、安全生产部部长高国朋等一行，到四川铁科公司，就开展2017年重点“两金”项目“一对一”专项工作进行了检查指导</p>
							</div>
						</a>
					</div>
					<div class="item">
						<a href="<?php echo site_url('jobsinfo'); ?>">
							<div class="item-lt"><img src="<?php echo static_file('web/img/news-img2.jpg'); ?>" alt=""></div>
							<div class="item-rt">
								<h5>人才招聘</h5>
								<p>7月7日，中铁科研院副总经理王国昌，财务会计部部长廖小龙、安全生产部部长高国朋等一行，到四川铁科公司，就开展2017年重点“两金”项目“一对一”专项工作进行了检查指导</p>
							</div>
						</a>
					</div>
				</div>
				<div class="paging">
					<div id="page"></div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(7).css('background','#b90000')
		$(".left-nav").find('ul>li').eq(1).find('a').css("color","#d7edff")
		$("#page").Page({
		    totalPages: 6,//总页数
		    liNums: 3,//分页的数字按钮数
		    activeClass: 'activP', //active类
		    firstPage: '首页',//首页按钮名称
		    lastPage: '末页',//末页按钮名称
		    prv: '«',//前一页按钮名称
		    next: '»',//后一页按钮名称
		    hasFirstPage: true,//是否有首页按钮
		    hasLastPage: true,//是否有末页按钮
		    hasPrv: true,//是否有前一页按钮
		    hasNext: true,//是否有后一页按钮
		    callBack : function(page){
		        //回调函数，page选中页数
		    }
		});
	</script>
	</body>
</html>