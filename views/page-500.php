<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<style>
		.main .content{text-align:center;}
		.main .content img.error-404{width:100%;max-width:400px;}
	</style>
	<div class="main">
		<div class="container">
			<h2>网页好像出了点问题!</h2>
			<div class="content">
				<img class="error-404" src="<?php echo SITE_URL;?>/assets/images/500.png" alt="网页不存在" />
				<p>
					<a href="<?php echo SITE_URL;?>">点击这儿返回首页</a>
				</p>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>