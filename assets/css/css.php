<?php
	$lightBlack = '#474747';
	$lightGray = '#DDD';
	$themeColor = '#D72171';
	$yellow = '#F8E71C';
	$errorRed = '#721c24';
	$errorLightRed = '#f8d7da';
	$errorDarkRed = '#f5c6cb';
	$successGreen = '#155724';
	$successLightGreen = '#d4edda';
	$successDarkGreen = '#c3e6cb';
?>
<style>
.center{
	text-align:center;
}
.btn {
	box-shadow:inset 0px 1px 0px 0px #9acc85;
	background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
	background-color:#74ad5a;
	border:1px solid #36472d;
	display:inline-block;
	cursor:pointer;
	color:#ffffff !important;
	font-family:Arial;
	font-size:13px;
	font-weight:bold;
	padding:6px 12px;
	text-decoration:none;
}
.btn:hover {
	background:linear-gradient(to bottom, #68a54b 5%, #74ad5a 100%);
	background-color:#68a54b;
}
.btn:active {
	position:relative;
	top:1px;
}
.panel-error{
	border-top:1px solid <?php echo $errorDarkRed;?>; border-bottom:1px solid <?php echo $errorDarkRed;?>;
	padding:15px;
	color:<?php echo $errorRed;?>; background-color:<?php echo $errorLightRed;?>;
}
.panel-success{
	border-top:1px solid <?php echo $successDarkGreen;?>; border-bottom:1px solid <?php echo $successDarkGreen;?>;
	padding:15px;
	color:<?php echo $successGreen;?>; background-color:<?php echo $successLightGreen;?>;
}
body{padding:0;margin:0;background:#FAFAFA;color:<?php echo $lightBlack;?>;font-size:16px;line-height:28px;font-family:"Microsoft Yahei","微软雅黑",sans-serif;}
ul{margin:0;padding:0;}
li{list-style:none;}
h1{padding:0;margin:0;font-size:18px;font-weight:bold;}
h2{padding:0;margin:0;font-size:18px;font-weight:bold;color:#000;}
h3{padding:0;margin:15px 0;font-size:18px;font-weight:bold;color:#000;}
h3 a{color:#000;}
p{margin:0 0 10px;}
img{width:100%;}
b.focus{color:<?php echo $themeColor;?>;}
.wp-block-gallery figure{margin-left:0;margin-right:0;}
.clear{clear:both;}
.container{width:860px;max-width:100%;margin:0 auto;padding:0 15px;box-sizing:border-box;}
.header{height:60px;line-height:60px;background:<?php echo $themeColor;?>;color:#FFF;}
.header a{color:#FFF;text-decoration:none;}
.header h1 a{float:left;font-weight:normal;}
.header .signin{float:right;line-height:60px;color:#FFF;padding:0 10px;margin-right:10px;}
.header .signup{float:right;line-height:60px;background:<?php echo $lightBlack;?>;color:#FFF;padding:0 10px;}
.main{margin:30px 0;min-height:65vh;}
.breadcrum{margin-bottom:25px;font-size:14px;}
.breadcrum a{text-decoration:none;color:<?php echo $lightBlack;?>;}
.highlight{margin:15px 0 25px;background:#FFF;}
.highlight .profile{width:300px;float:left;margin:0 25px 0 0;}
.highlight .contacts p{border-bottom:1px dashed <?php echo $lightGray;?>;line-height:37px;margin:0;}
.highlight .contacts p span.sub{color:<?php echo $lightGray;?>;}
.highlight a{color:<?php echo $themeColor;?>;text-decoration:none;}
.content p{text-align:justify;}
.content a{color:<?php echo $themeColor;?>;text-decoration:none;}
.content a.read-more{color:<?php echo $themeColor;?>;}
.footer{margin-top:50px;color:#FFF;background:<?php echo $lightBlack;?>;padding:30px 0;}
.member{margin-bottom:30px;}
.member h2{margin-bottom:10px;}
.member h2 a{color:#000;}
.member img{width:200px;float:left;margin:0 25px 0 0;}
.suggest .unit{float:left;margin-right:15px;max-width:175px;text-align:center;background:#FFF;}
.suggest .unit.last{margin-right:0;}
.suggest .unit a{font-size:80%;color:<?php echo $lightBlack;?>;}
.suggest .unit a:hover{color:<?php echo $themeColor;?>;}
.suggest .unit a img{max-width:175px;}
.footer ul{margin-bottom:30px;}
.footer h3{color:#FFF;}
.footer a{color:<?php echo $lightGray;?>;text-decoration:none;}
@media only screen and (max-width: 680px) {
	.header .signup{margin-right:-15px;}
	.header .signup span{display:none;}
	.highlight .profile{max-width:100%;width:100%;float:none;margin:0;}
	.highlight{padding:15px;font-size:15px;border:1px solid #F3F3F3;}
	.member img{width:80px;float:left;margin:0 10px 10px 0;}
	.member p.intro{clear:both;}
	.suggest .unit{width:30%;margin-right:4.9999%;}
	.suggest .unit a span{display:none;}
}
</style>