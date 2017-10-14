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
			<a href="<?php echo site_url('news'); ?>">公司新闻</a>
		</div>
		<div class="content">
			<div class="items">
				<h3>长白铁路开通运营</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>8月8日，有四川铁科参与监理建设的长白快速铁路（长春至白城铁路扩能改造工程）正式开通运营。当日上午，中国铁路总公司</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
			<div class="items">
				<h3>长白铁路开通运营</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>8月8日，有四川铁科参与监理建设的长白快速铁路（长春至白城铁路扩能改造工程）正式开通运营。当日上午，中国铁路总公司</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
			<div class="items">
				<h3>长白铁路开通运营</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>8月8日，有四川铁科参与监理建设的长白快速铁路（长春至白城铁路扩能改造工程）正式开通运营。当日上午，中国铁路总公司</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
			<div class="items">
				<h3>长白铁路开通运营</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>8月8日，有四川铁科参与监理建设的长白快速铁路（长春至白城铁路扩能改造工程）正式开通运营。当日上午，中国铁路总公司</span>
					<a href="<?php echo site_url('newsinfo'); ?>">[阅读全文]</a>
				</p>
			</div>
			<div class="items">
				<h3>长白铁路开通运营</h3>
				<b>[2017-08-10]</b>
				<p>
					<span>8月8日，有四川铁科参与监理建设的长白快速铁路（长春至白城铁路扩能改造工程）正式开通运营。当日上午，中国铁路总公司</span>
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