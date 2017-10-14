<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="newsinfo">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/news.jpg'); ?>" alt="">
			<div>
				<h5>新闻中心</h5>
				<p>News Center</p>
			</div>
		</div>
		<div class="newsinfo-box">
			<div class="left-nav">
				<ul>
					<h4>新闻中心</h4>
					<li><a href="<?php echo site_url('news'); ?>">驭祥动态</a></li>
					<li><a href="">行业新闻</a></li>
					<li><a href="">考试公告</a></li>
				</ul>
			</div>
			<div class="newsinfo-rt">
				<div class="content">
					<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
					<h6>
						<span>作者：驭祥</span><span>发布时间：2017.7.27</span><span>浏览：321次</span>
					</h6>
					<p>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动。</p>
					<p>活动分为三个阶段进行，一是全体起立歌唱《战友之歌》；二是学校领导监事长唐廷伟同志针对“八一”建军节到来之际感谢大家一年以来默默无闻为驭祥驾校付出的辛勤劳苦进行讲话；三是退伍老兵陈代智代表驭祥驾校退伍老兵进行表决心，表示一定谨记党和部队的教导发扬我军的优良传统，把退伍不褪色的精神带入到各个工作岗位上，为我校的发展建设做好表率，永葆军人本色！</p>
					<img src="<?php echo static_file('web/img/newsinfo.jpg'); ?>" alt="">
					<img src="<?php echo static_file('web/img/newsinfo.jpg'); ?>" alt="">
					<img src="<?php echo static_file('web/img/newsinfo.jpg'); ?>" alt="">
				</div>
				<div class="paging">
					<p>上一条：<a href="">驭祥驾校微信公众号正式开通</a></p>
					<p>下一条：<a href="">驭祥驾校安全工作会议</a></p>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$(".header").find('.nav').find('ul>li>a').eq(2).css({"background":"#050075","color":"#fff"})
		$(".left-nav").find('ul>li').eq(0).css("color","#eb7a00").find('a').css("color","#eb7a00")
	</script>
	</body>
</html>