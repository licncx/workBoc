<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="welc">
		<div class="silder">
			<div class="swiper-container">
        	<div class="swiper-wrapper">
            	<div class="swiper-slide">
            		<img src="<?php echo static_file('mobile/img/banner.jpg'); ?>" alt="">
            		<div class="bannertxt">
            			<h1>诚信  合作  公平  共赢</h1>
            			<p>SINCERITY   COOPERATION   FAIR   WIN-WIN</p>
            		</div>
            	</div>
            	<div class="swiper-slide">
            		<img src="<?php echo static_file('mobile/img/banner.jpg'); ?>" alt="">
            		<div class="bannertxt">
            			<h1>诚信  合作  公平  共赢</h1>
            			<p>SINCERITY   COOPERATION   FAIR   WIN-WIN</p>
            		</div>
            	</div>
            	<div class="swiper-slide">
            		<img src="<?php echo static_file('mobile/img/banner.jpg'); ?>" alt="">
            		<div class="bannertxt">
            			<h1>诚信  合作  公平  共赢</h1>
            			<p>SINCERITY   COOPERATION   FAIR   WIN-WIN</p>
            		</div>
            	</div>
            </div>
        		<!-- Add Pagination -->
        		<div class="swiper-pagination"></div>
    		</div>
		</div>
		<div class="content-title">
			<img src="<?php echo static_file('mobile/img/box1-img1.jpg'); ?>" alt="">
			<div class="category"><b></b><span>产品展示</span><b></b></div>
		</div>
		<div class="Product">
			<div class="protop">
				<img src="<?php echo static_file('mobile/img/box1-img2.jpg'); ?>" alt="">
				<div>
					<div class="bgc"></div>
					<div class="txt">
						<h6>321型</h6>
						<p>装配式公路钢桥项目</p>
						<a href="<?php echo site_url('product'); ?>"><button>READ MORE</button></a>
					</div>
				</div>
			</div>
			<div class="probtn">
				<img src="<?php echo static_file('mobile/img/box1-img3.jpg'); ?>" alt="">
				<div>
					<div class="bgc"></div>
					<div class="txt">
						<h6>200型</h6>
						<p>装配式公路钢桥项目</p>
						<a href="<?php echo site_url('product'); ?>"><button>READ MORE</button></a>
					</div>
				</div>
			</div>
			<div class="more"><a href="<?php echo site_url('product'); ?>"><button>READ MORE</button></a></div>
		</div>
		<div class="content-title">
			<img src="<?php echo static_file('mobile/img/box2-img1.jpg'); ?>" alt="">
			<div class="category"><b></b><span>公司概况</span><b></b></div>
		</div>
		<div class="survey">
			<div class="surveyImg"><img src="<?php echo static_file('mobile/img/box2-img2.jpg'); ?>" alt=""></div>
			<div class="surveyTxt">
				<h4>简阳华冶路桥工程有限公司</h4>
				<span>JYHYLQ ENGINERRING CO. LTD</span>
				<p>简阳华冶路桥工程有限公司座落于成都市简阳市太平桥镇318国道边，距成都第二绕城高速出口1公里，距成都35公里，高速直达，交通便利。</p>
				<a href="<?php echo site_url('intro'); ?>"><button>READ MORE</button></a>
			</div>
		</div>
		<div class="content-title">
			<img src="<?php echo static_file('mobile/img/box3-img1.jpg'); ?>" alt="">
			<div class="category"><b></b><span>新闻公告</span><b></b></div>
		</div>
		<div class="news">
			<div class="items">
				<div class="news-txt">
					<div class="Arrow"></div>
					<h4>西双版纳钢桥项目顺利竣工</h4>
					<p>西双版纳傣族自治州，为云南省下辖自治州，位于云南省南端。西双版纳...</p>
					<a href="<?php echo site_url('news'); ?>"><button>READ MORE</button></a>
				</div>
				<div class="news-img"><img src="<?php echo static_file('mobile/img/box3-img2.jpg'); ?>" alt=""></div>
			</div>
			<div class="items">
				<div class="news-txt">
					<div class="Arrow"></div>
					<h4>西双版纳钢桥项目顺利竣工</h4>
					<p>西双版纳傣族自治州，为云南省下辖自治州，位于云南省南端。西双版纳...</p>
					<a href="<?php echo site_url('news'); ?>"><button>READ MORE</button></a>
				</div>
				<div class="news-img"><img src="<?php echo static_file('mobile/img/box3-img3.jpg'); ?>" alt=""></div>
			</div>
			<div class="items">
				<div class="news-txt">
					<div class="Arrow"></div>
					<h4>西双版纳钢桥项目顺利竣工</h4>
					<p>西双版纳傣族自治州，为云南省下辖自治州，位于云南省南端。西双版纳...</p>
					<a href="<?php echo site_url('news'); ?>"><button>READ MORE</button></a>
				</div>
				<div class="news-img"><img src="<?php echo static_file('mobile/img/box3-img4.jpg'); ?>" alt=""></div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
<script>
	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        autoplay: 4000,
        loop : true,
    });
</script>
</body>
</html>