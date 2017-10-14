<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="honor">
		<div class="honor-content">
			<div class="banner"><img src="<?php echo static_file('web/img/page-banner.jpg'); ?>" alt=""></div>
			<?php include_once VIEWS.'inc/current-date.php'; ?>
			<div class="honor-lt">
				<div class="left-nav">
					<ul>
						<li class="menuHead"><a href="javascript:void(0)">公司介绍</a></li>
						<li><a href="<?php echo site_url('intro'); ?>"><span>&#xe600;</span>公司简介</a></li>
						<li><a href="<?php echo site_url('organ'); ?>"><span>&#xe600;</span>组织机构</a></li>
						<li><a href="<?php echo site_url('qualification'); ?>"><span>&#xe600;</span>企业资质</a></li>
						<li><a href="<?php echo site_url('honor'); ?>"><span>&#xe600;</span>企业荣誉</a></li>
						<li><a href="<?php echo site_url('ebook'); ?>"><span>&#xe600;</span>企业画册</a></li>
					</ul>
				</div>
			</div>
			<div class="honor-rt">
				<div class="rt-content">
					<h3>企业荣誉</h3>
					<div class="items">
						<div><img src="<?php echo static_file('web/img/honor-img1.png'); ?>" alt=""></div>
						<p>奖一文字介绍处</p>
					</div>
					<div class="items">
						<div><img src="<?php echo static_file('web/img/honor-img2.png'); ?>" alt=""></div>
						<p>奖一文字介绍处</p>
					</div>
					<div class="items">
						<div><img src="<?php echo static_file('web/img/honor-img3.png'); ?>" alt=""></div>
						<p>奖一文字介绍处</p>
					</div>
					<div class="items">
						<div><img src="<?php echo static_file('web/img/honor-img4.jpg'); ?>" alt=""></div>
						<p>青岛胶州湾海底隧道</p>
						<p>荣获第十二届中国土木工程詹天佑奖</p>
					</div>
					<div class="items">
						<div><img src="<?php echo static_file('web/img/honor-img5.jpg'); ?>" alt=""></div>
						<p>广州丫髻沙大桥主桥</p>
						<p>荣获第六届詹天佑土木工程大奖</p>
					</div>
					<div class="items">
						<div><img src="<?php echo static_file('web/img/honor-img6.jpg'); ?>" alt=""></div>
						<p>杭州市复兴大桥（钱江四桥）</p>
						<p>荣获第六届詹天佑土木工程大奖</p>
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
		$(".header").find('.nav').find('ul>li>a').eq(1).css('background','#b90000')
		$('.left-nav').find('li').eq(4).find('a').css("color","#d7edff")
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