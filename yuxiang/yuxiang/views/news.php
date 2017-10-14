<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="news">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/news.jpg'); ?>" alt="">
			<div>
				<h5>新闻中心</h5>
				<p>News Center</p>
			</div>
		</div>
		<div class="news-box">
			<div class="left-nav">
				<ul>
					<h4>新闻中心</h4>
					<li><a href="<?php echo site_url('news'); ?>">驭祥动态</a></li>
					<li><a href="">行业新闻</a></li>
					<li><a href="">考试公告</a></li>
				</ul>
			</div>
			<div class="news-rt">
				<div class="content">
					<div class="items">
						<div class="items-img"><img src="<?php echo static_file('web/img/new1-img1.jpg'); ?>" alt=""></div>
						<div class="items-txt">
							<a href="<?php echo site_url('newsinfo'); ?>">
								<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
								<p>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</p>
							</a>
						</div>
						<div class="Num">
							<img src="<?php echo static_file('web/img/browse.png'); ?>" alt=""><span>236</span>
						</div>
					</div>
					<div class="items">
						<div class="items-img"><img src="<?php echo static_file('web/img/new1-img1.jpg'); ?>" alt=""></div>
						<div class="items-txt">
							<a href="<?php echo site_url('newsinfo'); ?>">
								<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
								<p>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</p>
							</a>
						</div>
						<div class="Num">
							<img src="<?php echo static_file('web/img/browse.png'); ?>" alt=""><span>236</span>
						</div>
					</div>
					<div class="items">
						<div class="items-img"><img src="<?php echo static_file('web/img/new1-img1.jpg'); ?>" alt=""></div>
						<div class="items-txt">
							<a href="<?php echo site_url('newsinfo'); ?>">
								<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
								<p>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</p>
							</a>
						</div>
						<div class="Num">
							<img src="<?php echo static_file('web/img/browse.png'); ?>" alt=""><span>236</span>
						</div>
					</div>
					<div class="items">
						<div class="items-img"><img src="<?php echo static_file('web/img/new1-img1.jpg'); ?>" alt=""></div>
						<div class="items-txt">
							<a href="<?php echo site_url('newsinfo'); ?>">
								<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
								<p>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</p>
							</a>
						</div>
						<div class="Num">
							<img src="<?php echo static_file('web/img/browse.png'); ?>" alt=""><span>236</span>
						</div>
					</div>
					<div class="items">
						<div class="items-img"><img src="<?php echo static_file('web/img/new1-img1.jpg'); ?>" alt=""></div>
						<div class="items-txt">
							<a href="<?php echo site_url('newsinfo'); ?>">
								<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
								<p>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</p>
							</a>
						</div>
						<div class="Num">
							<img src="<?php echo static_file('web/img/browse.png'); ?>" alt=""><span>236</span>
						</div>
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
		$(".header").find('.nav').find('ul>li>a').eq(2).css({"background":"#050075","color":"#fff"})
		$(".news").find('.content').find('.items').eq(0).animate({'opacity': "1","margin-top": "0px"},1000);
		$(".news").find('.content').find('.items').eq(1).animate({'opacity': "1","margin-top": "0px"},1000);
		$(window).scroll(function() {
			var _height=$(window).height()
			var _scrollTop=$(window).scrollTop()
			for(var i=0;i<$(".news").find('.content').find('.items').length;i++){
				if(_scrollTop>($(".news").find('.content').find('.items').eq(i).offset().top)-_height){
					$(".news").find('.content').find('.items').eq(i).animate({'opacity': "1","margin-top":"0px"},1000);
				}
			}
		});
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
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