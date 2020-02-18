<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class Post{
	
	private function _get_post($post){
		
		$post->excerpt = mb_substr( preg_replace("/\r|\n/", '', strip_tags($post->post_content)), 0, 200 );
		$post->url = SITE_URL . '/blog/' . $post->post_name;
		
		return $post;
		
	}
	
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
		
		foreach( $results as $result ){
			$result = $this->_get_post( $result );
		}
		
		return $results;
		
	}
	
	public function get_post_by_slug($slug){
		
		global $db;
		$result = $db->get_row(
			$db->prepare("
				SELECT * 
				FROM wp_posts
				WHERE post_name = '%s0'", urlencode($slug)
			)
		);
		
		return $this->_get_post( $result );
		
	}
	
	public function get_postmeta_by_id($id){
		
		$results = new stdClass();
		
		global $db;

		$meta_data = $db->get_results(
			$db->prepare("
				SELECT meta_key, meta_value 
				FROM wp_postmeta
				WHERE post_id = '%s0' AND meta_key NOT LIKE '\_%'
				", $id
			)
		);
		
		foreach( $meta_data as $meta ){
			$results->{$meta->meta_key} = $meta->meta_value;
		}
		
		return $results;
		
	}
	
}