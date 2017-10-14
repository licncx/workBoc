<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="engineering">
		<div class="rw-content">
			<div class="banner"><img src="<?php echo static_file('web/img/page-banner.jpg'); ?>" alt=""></div>
			<?php include_once VIEWS.'inc/current-date.php'; ?>
			<div class="box-left">
				<div class="left-nav">
					<ul>
						<li class="menuHead"><a>业务领域</a></li>
						<li><a href="<?php echo site_url('business'); ?>"><span>&#xe600;</span>铁路工程</a></li>
						<li><a href=""><span>&#xe600;</span>公路工程</a></li>
						<li><a href=""><span>&#xe600;</span>城市交通</a></li>
						<li><a href=""><span>&#xe600;</span>桥梁工程</a></li>
						<li><a href=""><span>&#xe600;</span>隧道工程</a></li>
						<li><a href=""><span>&#xe600;</span>房屋建筑</a></li>
						<li><a href=""><span>&#xe600;</span>在建工程</a></li>
					</ul>
				</div>
			</div>
			<div class="box-right">
				<div class="items-box">
					<h3>铁路工程</h3>
					<div class="items">
						<a href="<?php echo site_url('businessinfo'); ?>">
							<div><img src="<?php echo static_file('web/img/box-img.jpg'); ?>" alt=""></div>
							<span>铁路工程案例一</span>
						</a>
					</div>
					<div class="items">
						<a href="<?php echo site_url('businessinfo'); ?>">
							<div><img src="<?php echo static_file('web/img/box-img.jpg'); ?>" alt=""></div>
							<span>铁路工程案例二</span>
						</a>
					</div>
					<div class="items">
						<a href="<?php echo site_url('businessinfo'); ?>">
							<div><img src="<?php echo static_file('web/img/box-img.jpg'); ?>" alt=""></div>
							<span>铁路工程案例三</span>
						</a>
					</div>
					<div class="items">
						<a href="<?php echo site_url('businessinfo'); ?>">
							<div><img src="<?php echo static_file('web/img/box-img.jpg'); ?>" alt=""></div>
							<span>铁路工程案例四</span>
						</a>
					</div>
					<div class="items">
						<a href="<?php echo site_url('businessinfo'); ?>">
							<div><img src="<?php echo static_file('web/img/box-img.jpg'); ?>" alt=""></div>
							<span>铁路工程案例五</span>
						</a>
					</div>
					<div class="items">
						<a href="<?php echo site_url('businessinfo'); ?>">
							<div><img src="<?php echo static_file('web/img/box-img.jpg'); ?>" alt=""></div>
							<span>铁路工程案例六</span>
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
		$(".header").find('.nav').find('ul>li>a').eq(3).css('background','#b90000')
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