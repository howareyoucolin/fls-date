<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<div class="main">
		<div class="container">
			<div class="breadcrum">
				<a href="<?php echo SITE_URL;?>"><u>首页</u></a> >> 
				<a href="<?php echo SITE_URL;?>/blog"><u>博客</u></a> >>
				<?php echo $p->post_title;?>
			</div>
			<h2><?php echo $p->post_title;?></h2>
			<div class="content">
				<p>&nbsp;</p>
				<p>发表于: <?php echo $p->post_modified;?></p>
				<?php echo $p->post_content;?>
				<p>&nbsp;</p>
				<?php include( ROOT_PATH . '/views/part-ad-mary.php' );?>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>