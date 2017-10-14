<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="main welc">
		<!-- banner -->
		<div class="carousel">
			<div class="silder">
				<img src="<?php echo static_file('web/img/banner2.jpg'); ?>" alt="">
				<img src="<?php echo static_file('web/img/banner1.jpg'); ?>" alt="">
			</div>
			<div class="switch">
				<div class="prev"><span>&#xe644;</span></div>
				<div class="next"><span>&#xe607;</span></div>
			</div>
			<div class="bannertxt">
				<h1>诚信 合作 公平 共赢</h1>
				<p>SINCERITY COOPERATION FAIR WIN-WIN</p>
				<button>READ MORE</button>
			</div>
		</div>
		<div class="content-title">
			<h1>PRODUCT DISPLAY</h1>
			<div class="category"><span></span><p>产品展示</p><span></span></div>
		</div>
		<!-- 产品展示 -->
		<div class="Product">
			<div class="protop">
				<img src="<?php echo static_file('web/img/box1-img1.jpg'); ?>" alt="">
				<div>
					<div class="bgc"></div>
					<div class="txt">
						<h6>321型</h6>
						<p>装配式公路钢桥项目</p>
						<a href="<?php echo site_url('steelbridge'); ?>"><button>READ MORE</button></a>
					</div>
				</div>
			</div>
			<div class="probtn">
				<img src="<?php echo static_file('web/img/box1-img2.jpg'); ?>" alt="">
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
			<h1>COMPANY PROFILE</h1>
			<div class="category"><span></span><p>公司概况</p><span></span></div>
		</div>
		<!-- 公司概况 -->
		<div class="survey">
			<div class="surveyImg">
				<img src="<?php echo static_file('web/img/box2.jpg'); ?>" alt="">
			</div>
			<div class="surveyTxt">
				<div>
					<h4>四川简阳华冶路桥工程有限公司</h4>
					<span>SCJYHYLQ ENGINERRING CO. LTD</span>
					<p>四川简阳华冶路桥工程有限公司座落于成都市简阳市太平桥镇318国道边，距成都第二绕城高速出口1公里，距成都35公里，高速直达，交通便利。</p>
					<a href="<?php echo site_url('intro'); ?>"><button>READ MORE</button></a>
				</div>
			</div>
		</div>
		<div class="content-title">
			<h1>NEWS BULLETIN</h1>
			<div class="category"><span></span><p>新闻公告</p><span></span></div>
		</div>
		<!-- 新闻公告 -->
		<div class="news">
			<div class="newstop">
				<div class="item"><img src="<?php echo static_file('web/img/box3-img1.jpg'); ?>" alt=""></div>
				<div class="item">
					<div class="Arrow Arrowtobtm"></div>
					<h4>西双版纳钢桥项目顺利竣工</h4>
					<p>西双版纳傣族自治州，为云南省下辖自治州，位于云南省南端。西双版纳...</p>
					<a href="<?php echo site_url('news'); ?>"><button>READ MORE</button></a>
				</div>
				<div class="item"><img src="<?php echo static_file('web/img/box3-img3.jpg'); ?>" alt=""></div>
			</div>
			<div class="newsbtm">
				<div class="item">
					<div class="Arrow Arrowtotop"></div>
					<h4>西双版纳钢桥项目顺利竣工</h4>
					<p>西双版纳傣族自治州，为云南省下辖自治州，位于云南省南端。西双版纳...</p>
					<a href="<?php echo site_url('news'); ?>"><button>READ MORE</button></a>
				</div>
				<div class="item"><img src="<?php echo static_file('web/img/box3-img2.jpg'); ?>" alt=""></div>
				<div class="item">
					<div class="Arrow Arrowtotop"></div>
					<h4>西双版纳钢桥项目顺利竣工</h4>
					<p>西双版纳傣族自治州，为云南省下辖自治州，位于云南省南端。西双版纳....</p>
					<a href="<?php echo site_url('news'); ?>"><button>READ MORE</button></a>
				</div>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
	$(window).scroll(function() {
		var scrollTop=$(window).scrollTop()
		var height=$(window).height()
		if(scrollTop>($(".protop").offset().top)-height+200){
			$(".protop").css({"margin-left":"0px","opacity":"1"})
		}
		if(scrollTop>($(".protop").offset().top)-height+200){
			$(".probtn").css({"margin-left":"0px","opacity":"1"})
		}
		if(scrollTop>($(".survey").find('.surveyImg').offset().top)-height+200){
			$(".survey").find('.surveyImg').find('img').css({"margin":"0px"})
			$(".survey").find('.surveyTxt').find('div').css({"margin":"180px 0 0 100px"})
			$(".survey").find('.surveyTxt').css("background-color","#fafafa")
		}
	});
		/**
	 * 轮播
	 * @param  {[type]} $ [description]
	 * @return {[type]}   [description]
	 */
	(function ($) {
		var Num=0
		$(".prev").click(function() {
			toPrev()
		})
		$(".next").click(function() {
			toNext()
		})
		var toPrev=function () {
			var imgMsg=$(".carousel").find(".silder").find("img");
			var imgList=imgMsg.length-1
			$(".carousel").find('.silder').find('img').css("opacity","0");
			$(".carousel").find('.silder').find('img').eq(Num).css("opacity","1");
			if(Num>0){
				Num--
			}else{
				Num=imgList
			}
		}
		var toNext=function () {
			var imgMsg=$(".carousel").find('.silder').find('img');
			var imgList=imgMsg.length-1
			$(".carousel").find('.silder').find('img').css("opacity","0");
			$(".carousel").find('.silder').find('img').eq(Num).css("opacity","1");
			if(Num>=imgList){
				Num=0
			}else{
				Num++
			}
		}
		window.setInterval(toNext,5000);
	})(jQuery)
	</script>
</body>
</html>