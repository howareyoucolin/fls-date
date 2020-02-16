<?php

	include_once('./functions.php');

	if(!isset($_GET['slug']) || empty($_GET['slug'])){
		redirect_404();
	}

	$mapping = get_json('post-mapping-title-id');
	$id = $mapping->{strtolower(urlencode($_GET['slug']))};

	if(!$id){
		redirect_404();
	}

	$p = get_json('post-'.$id);
	
?><!DOCTYPE html>
<html lang="zh">
<head>
	<title><?php echo $p->meta_title?$p->meta_title:$p->title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $p->meta_description;?>">
	<meta name="keywords" content="<?php echo $p->meta_keywords;?>">
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
				<a href="<?php echo SITE_URL;?>/blog"><u>博客</u></a> >>
				<?php echo $p->title;?>
			</div>
			<h2><?php echo $p->title;?></h2>
			<div class="content">
				<p>&nbsp;</p>
				<p>发表于: <?php echo $p->post_modified;?></p>
				<?php echo $p->content;?>
				<p>&nbsp;</p>
				<?php include(SITE_PATH.'/parts/ad-mary.php');?>
			</div>
		</div>
	</div>
	<?php include(SITE_PATH.'/parts/footer.php');?>
</body>