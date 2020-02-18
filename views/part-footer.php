<div class="footer">
	<div class="container">
		<h3>婚恋博客文章</h3>
		<ul>
			<?php 
			$post = new Post(); 
			$recent_posts = $post->get_latest_posts( 6 );
			foreach($recent_posts as $recent_post){
				echo '<li><a href="' . SITE_URL . '/blog/' . $recent_post->post_name . '">' . $recent_post->post_title . '</a></li>';
			}
			?>
			<li><a href="<?php echo SITE_URL;?>/blog">查看所有文章</a></li>
		</ul>
		<div>
			<a href="<?php echo SITE_URL;?>/sitemap">网站地图</a> &nbsp;&nbsp;
			<a href="<?php echo SITE_URL;?>/world-single-union">世界单身联谊会</a> &nbsp;&nbsp;
		</div>
	</div>
</div>
