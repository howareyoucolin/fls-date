<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
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
					<li>
						<a href="<?php echo SITE_URL;?>/500">500页面</a>
					</li>
				</ul>
				<p>&nbsp;</p>
				<div>博客文章:</div>
				<ul>
					<li>
						<a href="<?php echo SITE_URL;?>/blog">博客首页</a>
					</li>
					<?php foreach($posts as $p):?>
						<li>
							<a href="<?php echo $p->url;?>"><?php echo $p->post_title;?></a>
						</li>
					<?php endforeach;?>
				</ul>
				<p>&nbsp;</p>
				<div>会员页面:</div>
				<ul>
					<?php foreach($members as $member):?>
						<li>
							<a href="<?php echo $member->get_url();?>">
								<?php echo $member->get_super_title();?>
							</a>
						</li>
					<?php endforeach;?>
				</ul>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</body>