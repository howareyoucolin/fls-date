<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<div class="main">
		<div class="container">
			<p>&nbsp;</p>
			<h2><?php echo $p->page_title;?></h2>
			<div class="content">
				<p>&nbsp;</p>
				<?php echo $p->post_content;?>
				<p>&nbsp;</p>
				<?php include( ROOT_PATH . '/views/part-ad-mary.php' );?>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>