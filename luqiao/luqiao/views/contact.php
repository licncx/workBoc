<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<!-- 联系我们 -->
	<div class="main contactUs">
		<div class="navigation">
			<div class="menu">
				<ul>
					<li class="addrs"><a>公司地址</a></li>
					<li><a>留言板</a></li>
				</ul>
			</div>
		</div>
		<!-- 公司地址 -->
		<div class="address">
			<div class="feedback-wrap">
				<div class="map" id="allmap"></div>
				<div class="information">
					<h2>四川简阳华冶路桥工程有限公司</h2>
					<b>SCJYHYLQ ENGINEERING CO. LTD.</b>
					<p class="addr">地址：<span>四川省资阳市简阳市太平桥镇</span></p>
					<p class="contacts-p">联系人：<span>高经理：13915216661</span><span>李经理：13698325995</span></p>
					<p>电话：<span>028-27968811</span></p>
					<p>网址：<span>www.schuaye.cn</span></p>
					<p>邮箱：<span>13915216661@126.com</span></p>
				</div>
			</div>
		</div>
		<!-- 留言板 -->
		<div class="feedback">
			<div class="addr-box">
				<form action="">
					<label for="">姓名：</label><input type="text"><span>*</span>
					<label for="">地址：</label><input type="text"><br>
					<label for="">电话：</label><input type="text"><span>*</span>
					<label for="">邮箱：</label><input type="email"><span>*</span><br>
					<label for="">留言：</label><textarea name="" cols="30" rows="10"></textarea><br>
					<button type="submit" class="submit">提交</button><button type="reset" class="reset">重置</button>
				</form>
			</div>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		document.getElementById("place").innerHTML="联系我们";
		$(".header").find('.nav>ul>li').eq(6).css({"background-color":"#01406c"})
		$(".header").find('.nav>ul>li>a').eq(6).css({"color":"#fff"})
		$(".menu").find("li").click(function() {
			$(".menu").find('li').find('a').css("border-bottom","none")
			$(this).find('a').css("border-bottom","3px solid #0b5f92")
			var _index=$(this).index()
			if(_index==0){
				$(".address").css("display","block")
				$(".feedback").css("display","none")
			}else if(_index==1){
				$(".address").css("display","none")
				$(".feedback").css("display","block")
			}
		})
		var map = new BMap.Map("allmap");
		map.centerAndZoom(new BMap.Point(104.425149, 30.429723), 13);
		map.enableScrollWheelZoom();
		var mapb = new BMap.Bounds(new BMap.Point(104.225149, 30.629723),new BMap.Point(104.625149, 30.229723));
		try {BMapLib.AreaRestriction.setBounds(map, mapb);} catch (e) {alert(e);}
	</script>
</body>
</html>