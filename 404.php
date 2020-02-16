<?php
 
include_once('./functions.php');

?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约婚介交友 - 您要找的网页不存在</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="纽约婚介交友 - 您要找的网页不存在. 纽约有什么好的婚介交友? 你在相亲,找男朋友吗,找女朋友吗? 婚恋真的还是门当户对的.其实不是你不够好,只是纽约男女要求太高,到底求偶标准都高到了怎样逆天的程度?为什么自己一直单身?">
	<meta name="keywords" content="纽约交友, 法拉盛婚介, 纽约找男朋友">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="rA4kzdLnrqIZt9dQUioJXNJcSwFcvdNOzwEpIRumI8s">
	<?php include(SITE_PATH.'/parts/css.php');?>
	<style>
		.main .content{text-align:center;}
		.main .content img.error-404{width:100%;max-width:400px;}
	</style>
</head>
<body>
	<?php include(SITE_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<h2>您要找的网页不存在</h2>
			<div class="content">
				<img class="error-404" src="https://369usa.com/images/404.png" alt="网页不存在" />
				<p>
					<a href="<?php echo SITE_URL;?>">点击这儿返回首页</a>
				</p>
			</div>
		</div>
	</div>
	<?php include('./parts/footer.php');?>
</body>