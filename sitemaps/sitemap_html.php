<?php

	include_once('../functions.php');

	$posts = get_json('post-all');
	$members = get_json('members-all');
	
?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约婚介交友 - 网站地图</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="纽约婚介交友的网站地图, 地理位置, 纽约, 法拉盛. 网站主要用来帮助年轻青年男女找女朋友和找男朋友, 提高相亲的成功率, 组织美满的家庭.">
	<meta name="keywords" content="纽约婚介交友">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<?php include(SITE_PATH.'/parts/css.php');?>
	<style>.main ul li a{color:#D72171;}</style>
</head>
<body>
	<?php include(SITE_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<h2>纽约婚介交友 - 网站地图</h2>
			<div class="content">
				<p>&nbsp;</p>
				<div>网站页面:</div>
				<ul>
					<li>
						<a href="<?php echo SITE_URL;?>">首页</a>
					</li>
					<li>
						<a href="<?php echo SITE_URL;?>/sitemap">网站地图</a>
					</li>
					<li>
						<a href="<?php echo SITE_URL;?>/world-single-union">世界单身联谊会</a>
					</li>
					<li>
						<a href="<?php echo SITE_URL;?>/404">404页面</a>
					</li>
				</ul>
				<p>&nbsp;</p>
				<div>博客文章:</div>
				<ul>
					<li>
						<a href="<?php echo SITE_URL;?>/blog">博客首页</a>
					</li>
					<?php foreach($posts as $post):?>
						<li>
							<a href="<?php echo SITE_URL;?>/blog/<?php echo $post->slug;?>"><?php echo $post->title;?></a>
						</li>
					<?php endforeach;?>
				</ul>
				<p>&nbsp;</p>
				<div>会员页面:</div>
				<ul>
					<?php foreach($members as $member):?>
						<li>
							<a href="<?php echo SITE_URL;?>/member/<?php echo $member->id;?>">
								<?php echo $member->super_title?$member->super_title:$member->title;?>
							</a>
						</li>
					<?php endforeach;?>
				</ul>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</body>