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
				博客
			</div>
			<h2>博客</h2>
			<div class="content">
				<p>&nbsp;</p>
				<?php foreach($posts as $p):?>
					<h3><a href="<?php echo $p->url;?>"><?php echo $p->post_title;?></a></h3>
					<p>
						<?php echo $p->excerpt;?> ... 
						<a class="read-more" href="<?php echo $p->url;?>">[查看全文]</a>
					</p>
					<p>&nbsp;</p>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>