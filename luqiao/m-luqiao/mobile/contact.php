<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<?php include_once VIEWS.'inc/banner.php'; ?>
	<div class="contactUs">
		<div class="navigation">
			<ul>
				<li class="addrs"><a>公司地址</a></li>
				<li><a>留言板</a></li>
			</ul>
		</div>
		<div class="address">
			<div class="map" id="allmap"></div>
			<div class="information">
				<h2>简阳华冶路桥工程有限公司</h2>
				<b>JYHYLQ ENGINEERING CO. LTD.</b>
				<p>地址：<span>四川省资阳市简阳市太平桥镇</span></p>
				<p class="contacts-p">联系人：<span>高经理：13915216661</span><span>李经理：13698325995</span></p>
				<p>电话：<span>028-27968811</span></p>
				<p>网址：<span>www.schuaye.cn</span></p>
				<p>邮箱：<span>13915216661@126.com</span></p>
			</div>
		</div>
		<div class="feedback">
			<form action="">
				<label for="">姓名：</label><input type="text"><span>*</span><br>
				<label for="">地址：</label><input type="text"><br>
				<label for="">电话：</label><input type="text"><span>*</span><br>
				<label for="">邮箱：</label><input type="email"><span>*</span><br>
				<label for="">留言：</label><textarea name="" cols="30" rows="10"></textarea><br>
				<button type="submit" class="submit">提交</button><button type="reset" class="reset">重置</button>
			</form>
		</div>
	</div>
	<?php include_once VIEWS.'inc/footer.php'; ?>
	<script>
		$("#place").html("联系我们")
		$(".navigation").find("li").click(function() {
			$(".navigation").find('li').find('a').css("border-bottom","none")
			$(this).find('a').css("border-bottom","0.05rem solid #0b5f92")
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
		var point = new BMap.Point(104.425149, 30.429723);
		map.centerAndZoom(point, 13);
		map.enableScrollWheelZoom(true);
		var marker = new BMap.Marker(point);
		map.addOverlay(marker);
		var infoWindow = new BMap.InfoWindow("简阳华冶路桥工程有限公司");
       		marker.openInfoWindow(infoWindow);
       		marker.addEventListener("click",function(){
            	marker.openInfoWindow(infoWindow);
      		});
	</script>
</body>
</html>