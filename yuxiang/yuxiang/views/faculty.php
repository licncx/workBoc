<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once VIEWS.'inc/head.php'; ?>
</head>
<body>
	<?php include_once VIEWS.'inc/header.php'; ?>
	<div class="faculty">
		<div class="page-banner">
			<img src="<?php echo static_file('web/img/faculty.jpg'); ?>" alt="">
			<div>
				<h5>师资力量</h5>
				<p>Teacher Resources</p>
			</div>
		</div>
		<div class="faculty-box">
			<div class="left-nav">
				<ul>
					<h4>师资力量</h4>
					<li><a href="<?php echo site_url('faculty'); ?>">A型教练</a></li>
					<li><a href="">B型教练</a></li>
					<li><a href="">C型教练</a></li>
				</ul>
			</div>
			<div class="faculty-rt">
				<div class="content">
					<div class="select-coach">
						<span>A型教练</span>
						<b>
							<input type="text" placeholder="请输入教练姓名查询"><button type="button">查询</button>
						</b>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
						</div>
					</div>
					<div class="items">
						<div class="portrait"><img src="<?php echo static_file('web/img/portrait.jpg'); ?>" alt="教练照片"></div>
						<div class="txt">
							<a href="<?php echo site_url('facultyinfo'); ?>"><h6>张三</h6></a>
							<p>合格率：<span>95%</span></p>
							<p>合格率排名：<span>03</span></p>
							<p>准教车型：<span>A2型</span></p>
							<p>号码：<span>13456788765</span></p>
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
		$(".header").find('.nav').find('ul>li>a').eq(6).css({"background":"#050075","color":"#fff"})
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