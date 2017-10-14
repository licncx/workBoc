<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="news">
		<div class="location">
			<span>当前位置：</span>
			<a href="<?php echo site_url('welcome'); ?>">首页></a>
			<a href="<?php echo site_url('news'); ?>">新闻中心></a>
			<a href="<?php echo site_url('news'); ?>">驭祥动态</a>
		</div>
		<div class="content">
			<div class="items">
				<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
			<div class="items">
				<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
			<div class="items">
				<h3>遂宁驭祥驾校庆祝“八一”建军活动</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>2015年7月25日,在中国人民解放军成立88周年到来之际，驭祥驾校组织全校退伍老兵在滨江路“打渔人家”进行庆“八一”建军节活动</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
		</div>
		<div class="paging">
			<ul>
				<li><a href="">首页</a></li>
				<li><a href="">上一页</a></li>
				<li><span>1</span>/<span>2</span></li>
				<li><a href="">下一页</a></li>
				<li><a href="">尾页</a></li>
			</ul>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		for(var i=0;i<$('.news').find('.items').find('p').length;i++){
			if($('.news').find('.items').find('p').eq(i).find('span').text().length>55){
				var textStr=$('.news').find('.items').find('p').eq(i).find('span').text().slice(0, 55)+"..."
				$('.news').find('.items').find('p').eq(i).find('span').html(textStr)
			}
		}
	</script>
	</body>
</html>