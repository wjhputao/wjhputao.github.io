﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>葡萄品种</title>
		<link rel="icon" href="/favicon.ico">
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/jquery_hover.css">
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript">
		$(function(){
			$('.showpic a span').css({opacity:0}).show();
			$(".showpic a span").hover(function(){
					$(this).stop().fadeTo(500, 1);
				}, function(){
					$(this).stop().fadeTo(500, 0);
				}
			);
		});
		</script>
		
		<script src="js/bgStretch.js"></script>
		<script>
			$(document).ready(function(){
			$('#bgStretch')
				.bgStretch({
					align:'leftTop'
				})
			});
		</script>
		
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="">
		<div id="bgStretch"><img src="images/red4.jpg" alt=""></div>
<!--==============================header=================================-->
		<header> 		
			<div class="menu_block">
				<div class="container_12">
					<div class="grid_12"> 
						<!--form id="search" action="search.php" method="GET">
							<input type="text" name="s">							
								<a onClick="document.getElementById('search').submit()"></a>
							<div class="clear"></div>
						</form>
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div-->
						<div class="socials">
							<img src="images/logo_1.png"/>
						</div>
						<nav class="" >
							<ul class="sf-menu">
								<li><a href="index.php">首页</a></li>
								<li><a href="index-1.php">关于农庄</a></li>
								<li><a href="index-2.php">新闻动态</a></li>
								<!--li><a href="index-3.php">Wine Clubs</a></li-->
								<li class="current"><a href="index-4.php">葡萄品种</a></li>
								<li><a href="index-5.php">联系我们</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
<!--=======content================================-->
		
		<div class="content_wrapper">
		
			<div class="container_12">
				<div class="showpic">
					<a target="_blank" class="picnav01" href="#"><span>甬优一号</span></a>
					<a target="_blank" class="picnav02" href="#"><span>巨玫瑰</span></a>
					<a target="_blank" class="picnav03" href="#"><span>维多利亚</span></a>
					<a target="_blank" class="picnav04" href="#"><span>巨峰</span></a>
					<div class="showpic_clear">&nbsp;&nbsp;&nbsp;</div>
					<a target="_blank" class="picnav05" href="#"><span>夏黑</span></a>
					<a target="_blank" class="picnav06" href="#"><span>美人指</span></a>
					<a target="_blank" class="picnav07" href="#"><span>贵妃玫瑰</span></a>
					<a target="_blank" class="picnav08" href="#"><span>秦龙大穗</span></a>
					<div class="showpic_clear">&nbsp;&nbsp;&nbsp;</div>
					<a target="_blank" class="picnav09" href="#"><span>金手指</span></a>
					<a target="_blank" class="picnav10" href="#"><span>无核白鸡心</span></a>
					<a target="_blank" class="picnav11" href="#"><span>白罗莎里奥</span></a>
					<a target="_blank" class="picnav12" href="#"><span>红罗莎里奥</span></a>
					<div class="showpic_clear">&nbsp;&nbsp;&nbsp;</div>
					<a target="_blank" class="picnav13" href="#"><span>矢富罗莎</span></a>
					<a target="_blank" class="picnav14" href="#"><span>红富士</span></a>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer style="margin-top:80px;">
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
					Copyright &copy; 2014.<a target="_blank" href="">余姚临山味香园王建红葡萄庄园</a>版权所有.
					<span style="float:right;">联系电话：15824231255&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：余姚市临山镇兰海村新庵一区8号</span>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>