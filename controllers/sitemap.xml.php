<?php

header('Content-Type: application/xml; charset=utf-8');

$post = new Post();
$posts = $post->get_latest_posts();

$members_factory = new Members_Factory();
$members = $members_factory->get_all_members();

//Avoid extra space. 
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
   <?php foreach($posts as $p):?>
	   <url>
		  <loc><?php echo $p->url;?></loc>
		  <lastmod><?php echo (new DateTime($p->post_modified))->format('Y-m-d');?></lastmod>
		  <changefreq>weekly</changefreq>
		  <priority>0.8</priority>
	   </url>
   <?php endforeach;?>
   <?php foreach($members as $member):?>
	   <url>
		  <loc><?php echo $member->get_url();?></loc>
		  <lastmod><?php echo (new DateTime($member->get_last_modified()))->format('Y-m-d');?></lastmod>
		  <changefreq>weekly</changefreq>
		  <priority>0.8</priority>
	   </url>
   <?php endforeach;?>
</urlset><?php  


