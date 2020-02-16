<?php
 
	header('Content-Type: application/xml; charset=utf-8');

	include_once('../functions.php');
	
	$posts = get_json('post-all');
	$members = get_json('members-all');
	
	$post_last_modified = 0;
	foreach($posts as $post){
		if($post->post_modified > $post_last_modified) $post_last_modified = $post->post_modified;
	}
	
echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc><?php echo SITE_URL;?></loc>
      <lastmod>2019-11-15</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc><?php echo SITE_URL;?>/world-single-union</loc>
      <lastmod>2019-12-30</lastmod>
      <changefreq>monthly</changefreq>
      <priority>0.8</priority>
   </url>
   <url>
      <loc><?php echo SITE_URL;?>/blog</loc>
      <lastmod><?php echo (new DateTime($post_last_modified))->format('Y-m-d');?></lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.8</priority>
   </url>
   <?php foreach($posts as $post):?>
	   <url>
		  <loc><?php echo SITE_URL;?>/blog/<?php echo $post->slug;?></loc>
		  <lastmod><?php echo (new DateTime($post->post_modified))->format('Y-m-d');?></lastmod>
		  <changefreq>weekly</changefreq>
		  <priority>0.8</priority>
	   </url>
   <?php endforeach;?>
   <?php foreach($members as $member):?>
	   <url>
		  <loc><?php echo SITE_URL;?>/member/<?php echo $member->id;?></loc>
		  <lastmod><?php echo (new DateTime($member->post_modified))->format('Y-m-d');?></lastmod>
		  <changefreq>weekly</changefreq>
		  <priority>0.8</priority>
	   </url>
   <?php endforeach;?>
</urlset><?php  


