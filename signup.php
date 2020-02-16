<?php
 
include_once('./functions.php');

?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约婚介交友 - 免费注册会员</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="纽约婚介交友免费注册会员, 注册过程仅花2-3分钟,如果你在寻求介友,找男朋友,找女朋友,强烈建议你马上注册一个免费的会员,名额有限,时间有限.">
	<meta name="keywords" content="纽约交友, 纽约找女朋友, 纽约找男朋友">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="rA4kzdLnrqIZt9dQUioJXNJcSwFcvdNOzwEpIRumI8s">
	<?php include(SITE_PATH.'/parts/css.php');?>
	<style>
		.main h2{margin-bottom:25px;}
		.main p.label{margin:0;}
		.red{color:#D00;}
		input[type=text]{box-sizing:border-box;border:1px solid #EEE;padding:5px;height:36px;outline:0;max-width:400px;width:100%;line-height:24px;}
		input[type=submit]{width:200px;height:36px;}
		textarea{box-sizing:border-box;border:1px solid #EEE;padding:5px;outline:0;width:100%;height:180px;line-height:24px;}
		@media only screen and (max-width: 680px){
			textarea{height:250px;}
			input[type=submit]{width:100%;}
		}
	</style>
</head>
<body>
	<?php include(SITE_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<h2>免费注册会员</h2>
			<div class="content">
				<form action="https://api.369usa.com/signup" method="post">
					<p class="label">微信号码: <span class="red">(必须填)</span></p>
					<p><input type="text" name="wechat" /></p>
					<p class="label">电话号码:</p>
					<p><input type="text" name="phone" /></p>
					<p class="label">电子邮箱:</p>
					<p><input type="text" name="email" /></p>
					<p class="label">基本资料: <span class="red">(必须填)</span></p>
					<p><textarea name="intro"></textarea></p>
					<!--<p class="label">兴趣爱好:</p>
					<p><textarea name="hobby"></textarea></p>-->
					<p class="label">喜欢什么类型的男生/女生:</p>
					<p><textarea name="likes"></textarea></p>
					<!--<p class="label">我的朋友描述我的形容词:</p>
					<p><textarea name="about"></textarea></p>-->
					<p><input type="submit" class="btn" value="提交" /></p>
				</form>
			</div>
		</div>
	</div>
	<?php include('./parts/footer.php');?>
</body>