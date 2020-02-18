<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class Post{
	
	public function get_latest_posts($limit = 99999){
		
		global $db;
		$results = $db->get_results(
			$db->prepare("
				SELECT * 
				FROM wp_posts
				WHERE post_type = 'post' AND post_status = 'publish'
				ORDER BY post_date DESC
				LIMIT %s0", $limit
			)
		);
		
		return $results;
		
	}
	
}