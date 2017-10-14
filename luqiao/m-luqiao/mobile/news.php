<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<div class="newsBulletin">
		<div class="navigation newsNav">
			<ul>
				<li><a href="<?php echo site_url('news'); ?>">新闻聚焦</a></li>
				<li><a href="<?php echo site_url('news'); ?>">通知公告</a></li>
			</ul>
		</div>
		<div class="newsfocus">
			<div class="item">
				<a href="<?php echo site_url('newsinfo'); ?>">
					<div class="itemtop">
						<img src="<?php echo static_file('mobile/img/new-img1.jpg'); ?>" alt="新闻聚焦">
						<div>
							<span>05.31.2017</span>
							<h3>某某某赴阿尔及利亚视察海外项目</h3>
						</div>
					</div>
				</a>
				<div class="itembtm">
					<a href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fshare.baidu.com%2Fcode%230-tsina-1-76418-397232819ff9a47a7b7e80a40613cfe1#_loginLayer_1499754047990">&#xe60b;</a>
					<a href="http://share.v.t.qq.com/index.php?c=share&a=index&url=http%3A%2F%2Fshare.baidu.com%2Fcode%230-tqq-1-54197-89b7933b38b0586d98eb9d131fa70b46">&#xe62b;</a>
					<a href="http://connect.qq.com/widget/shareqq/index.html?url=http%3A%2F%2Fwww.jiathis.com%2Fshare&showcount=0&summary=%E5%88%86%E4%BA%AB%E5%88%B0QQ%E5%A5%BD%E5%8F%8B">&#xe67a;</a>
				</div>
			</div>
			<div class="item">
				<a href="<?php echo site_url('newsinfo'); ?>">
					<div class="itemtop">
						<img src="<?php echo static_file('mobile/img/new-img2.jpg'); ?>" alt="新闻聚焦">
						<div>
							<span>05.31.2017</span>
							<h3>某某某赴阿尔及利亚视察海外项目</h3>
						</div>
					</div>
				</a>
				<div class="itembtm">
					<a href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fshare.baidu.com%2Fcode%230-tsina-1-76418-397232819ff9a47a7b7e80a40613cfe1#_loginLayer_1499754047990">&#xe60b;</a>
					<a href="http://share.v.t.qq.com/index.php?c=share&a=index&url=http%3A%2F%2Fshare.baidu.com%2Fcode%230-tqq-1-54197-89b7933b38b0586d98eb9d131fa70b46">&#xe62b;</a>
					<a href="http://connect.qq.com/widget/shareqq/index.html?url=http%3A%2F%2Fwww.jiathis.com%2Fshare&showcount=0&summary=%E5%88%86%E4%BA%AB%E5%88%B0QQ%E5%A5%BD%E5%8F%8B">&#xe67a;</a>
				</div>
			</div>
			<div class="item">
				<a href="<?php echo site_url('newsinfo'); ?>">
					<div class="itemtop">
						<img src="<?php echo static_file('mobile/img/new-img3.jpg'); ?>" alt="新闻聚焦">
						<div>
							<span>05.31.2017</span>
							<h3>某某某赴阿尔及利亚视察海外项目</h3>
						</div>
					</div>
				</a>
				<div class="itembtm">
					<a href="http://service.weibo.com/share/share.php?url=http%3A%2F%2Fshare.baidu.com%2Fcode%230-tsina-1-76418-397232819ff9a47a7b7e80a40613cfe1#_loginLayer_1499754047990">&#xe60b;</a>
					<a href="http://share.v.t.qq.com/index.php?c=share&a=index&url=http%3A%2F%2Fshare.baidu.com%2Fcode%230-tqq-1-54197-89b7933b38b0586d98eb9d131fa70b46">&#xe62b;</a>
					<a href="http://connect.qq.com/widget/shareqq/index.html?url=http%3A%2F%2Fwww.jiathis.com%2Fshare&showcount=0&summary=%E5%88%86%E4%BA%AB%E5%88%B0QQ%E5%A5%BD%E5%8F%8B">&#xe67a;</a>
				</div>
			</div>
		</div>
		<div class="more"><button>READ MORE</button></div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$("#place").html("新闻中心")
		$(".navigation").find('ul>li>a').not($(".cur").find('a')).css("border-bottom","none")
		$(".navigation").find('.cur').find("a").css("border-bottom","0.05rem solid #0b5f92")
	</script>
</body>
</html>