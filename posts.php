<?php

	include_once('./functions.php');

	$posts = get_json('post-all');
	
?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约法拉盛婚介交友 - 博客</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="纽约法拉盛婚介交友博客是一个十分有知识,有深度,有文化,对广大单身男女有帮助的一个博客,无论你是在找男朋友或者找女朋友或者就一般交友都是有着十分可贵的信息,希望你能在这儿有所收获,学到一定的东西.">
	<meta name="keywords" content="纽约,法拉盛,婚介,交友">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<?php include(SITE_PATH.'/parts/css.php');?>
</head>
<body>
	<?php include(SITE_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<div class="breadcrum">
				<a href="<?php echo SITE_URL;?>"><u>首页</u></a> >> 
				博客
			</div>
			<h2>博客</h2>
			<div class="content">
				<p>&nbsp;</p>
				<?php foreach($posts as $post):?>
					<h3><a href="<?php echo SITE_URL;?>/blog/<?php echo $post->slug;?>"><?php echo $post->title;?></a></h3>
					<p>
						<?php echo $post->excerpt;?> ... 
						<a class="read-more" href="<?php echo SITE_URL;?>/blog/<?php echo $post->slug;?>">[查看全文]</a>
					</p>
					<p>&nbsp;</p>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<?php include(SITE_PATH.'/parts/footer.php');?>
</body>