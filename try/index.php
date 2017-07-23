<?php 
date_default_timezone_set('Europe/Kiev');
$dney = 193 - date('z');


function text_pref($dney)
{
	$des = $dney%100;
	if( ($des>20 && $des%10==1) || $des==1 )
		return 'До запуска остался';
	else 
		return 'До запуска осталось';
}

function text_posf($dney)
{
	if( ($dney%100>10 && $dney%100<20) || ($dney%10==0) || ($dney%10>4) )
		return "дней";
	else if( ($dney%10==1) )
		return "день";
	else 
		return "дня";
}

?><!DOCTYPE HTML>
<html>
	<head>
		<title>Agudova & Co</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<link rel="icon" type="image/png" href="favicon.png">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="MobileOptimized" content="650">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="true">
		<meta name="format-detection" content="telephone=yes">
		<meta name="PalmComputingPlatform" content="yes">
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		
	</head>
	<body>
		<div class="logo-wrap">
			<img src="img/logo.gif" id="logo" />
		</div>
		<div id="line" class="rand-color">
			<div></div>
		</div>
		<div class="line2">
			<div></div>
		</div>
		<div class="wrap">
			<div class="contacts">
				<div>Тел.+38(099)150-89-06<br />
				Email: agudova@agudova.com</div>
				<ul class="soc_seti">
					<li><a href="http://vk.com/agudova_co" class="icon-vk" target="_blank"></a></li>
					<li><a href="https://www.facebook.com/agudova.co" class="icon-facebook" target="_blank"></a></li>
					<li><a href="https://plus.google.com/u/0/109021044325528089378/posts?cfem=1" class="icon-google" target="_blank"></a></li>
					<li><a href="https://twitter.com/Agudova" class="icon-twitter" target="_blank"></a></li>
				</ul>
			</div>						<div id="cloud"><p>В Луганске бомбят,<br />а мы в безопастном месте — в космосе.<br />Вернемся вскоре:)</p></div>			
			<div id="rocket"></div>			<div id="fire"></div>
			<div id="circle" class="rand-color">
					<div class="light"></div>
				<div class="time" style="display: block"></div>
			</div>
		</div>		
		<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				
				function getColor()
				{
					var colors = new Array('#993399', '#CC0000', '#FF6600', '#339933', '#339999', '#3366CC');
					var colors = new Array('#B54FBA', '#FF3035', '#FF6700', '#3FAC2E', '#00BAAC', '#4893FF');
					var rand = Math.random();
					while(rand%1)
						rand *= 10;
					var color = colors[ rand%colors.length ];
					return color;
				}
				var oldColor = $.cookie('color');
				var newColor;
				do {
					newColor = getColor();
				}while(newColor == oldColor)
				$.cookie('color', newColor);
				$('.rand-color').css('background', newColor);

			});
		</script>
		<div class="none" style="display: none">
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t44.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
		</div>
	</body>
</html>
