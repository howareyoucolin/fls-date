<?php
 
include_once('./functions.php');

?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约婚介交友 - 注册成功</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="rA4kzdLnrqIZt9dQUioJXNJcSwFcvdNOzwEpIRumI8s">
	<?php include(SITE_PATH.'/parts/css.php');?>
	<style>
		.main h2{margin-bottom:25px;}
	</style>
</head>
<body>
	<?php include(SITE_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<h2>注册成功</h2>
			<div class="content">
				<p>会员微信号: <?php echo isset($_GET['wechat'])?$_GET['wechat']:'N/A';?></p>
				<p>十分感谢你注册做本网站的会员, 您的资料已成功提交到我们的后台, 请我们花一点时间审核您的宝贵资料, 然后您的资料将会出现在我们的网站的首页, 谢谢!</p>
				<p>&nbsp;</p><p>&nbsp;</p>
				<p style="text-align:center;">
					<img
						style="width:70%;max-width:280px;"
						src="<?php echo SITE_URL;?>/assets/images/thankyou.gif" />
				</p>
				<p>&nbsp;</p>
				<p>您可以<a href="<?php echo SITE_URL;?>">点击这儿</a>返回首页.</p><p>&nbsp;</p>
			</div>
		</div>
	</div>
	<?php include('./parts/footer.php');?>
</body>