<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class Member{

	private $id = null;
	private $data = null;

	public function __construct($id){
		
		$this->id = $id;
		
	}
	
	public function get_data(){
		
		$results = new stdClass();
		
		global $db;

		$meta_data = $db->get_results(
			$db->prepare("
				SELECT meta_key, meta_value 
				FROM wp_postmeta
				WHERE post_id = '%s0' AND meta_key NOT LIKE '\_%'
				", $this->id
			)
		);
		
		foreach( $meta_data as $meta ){
			$results->{$meta->meta_key} = $meta->meta_value;
		}
		
		$post_data = $db->get_row(
			$db->prepare("
				SELECT * 
				FROM wp_posts
				WHERE ID = '%s0'
				", $this->id
			)
		);
		
		foreach( $post_data as $key => $value ){
			$results->{$key} = $value;
		}
		
		return $this->data = $results;
		
	}
	
	public function get_var($key){
		
		//Init data only once.
		if( $this->data === null ){
			$this->get_data();
		}
		
		if( isset($this->data->{$key}) ){
			return $this->data->{$key};
		}
		
		return false;
		
	}

	public function get_age(){
		
		$dob = $this->get_var('dob');
		
		$current_year = date( 'Y' );
		$current_month = date( 'm' );
		$current_day = date( 'd' );
		
		$birth_year = substr( $dob, 0, 4 );
		$birth_month = substr( $dob, 4, 6 );
		$birth_day = substr( $dob, 6, 8 );
		
		if( $birth_month < $current_month ){
			return $current_year - $birth_year;
		}
		elseif( $birth_month > $current_month ){
			return $current_year - $birth_year - 1;
		}
		elseif( $birth_day <= $current_day ){
			return $current_year - $birth_year;
		}
		else{
			return $current_year - $birth_year - 1;
		}
		
	}

	public function get_super_title(){
		
		return $this->get_var('super_title') ? $this->get_var('super_title') : $this->get_var('post_title');
		
	}
	
	public function get_title(){
		
		return $this->get_var('post_title');
		
	}
	
	public function get_gender(){
		
		return $this->get_var('gender') == 'm' ? '男生' : '女生';
		
	}
	
	public function get_wechat(){
		
		return $this->get_var('wechat');
		
	}
	
	public function get_email(){
		
		return $this->get_var('email');
		
	}
	
	public function get_phone(){
		
		return $this->get_var('phone');
		
	}
	
	public function get_intro(){

		return $this->get_var('intro');

	}
	
	public function get_content(){

		return $this->get_var('post_content');

	}

	public function get_url(){
		
		return SITE_URL . '/member/' . $this->id;
		
	}
	
	public function get_profile_image_url(){
		
		global $db;
		
		$result = $db->get_var(
			$db->prepare("
				SELECT p.guid
				FROM wp_posts AS p
				JOIN wp_postmeta AS pm
				ON p.ID = pm.meta_value
				WHERE pm.post_id = '%s0' AND pm.meta_key = '_thumbnail_id'
			", $this->id )
		);
		
		return $result ? $result : 'https://www.ajactraining.org/wp-content/uploads/2019/09/image-placeholder.jpg';
		
	}
	
	public function get_suggestions(){
		
		if( $this->get_var('gender') === 'm' ){
			$suggestions = array(16,21,126,108);
		}
		else{
			$suggestions = array(94,98,111,114);
		}
		
		foreach($suggestions as $key => $value){
			if($this->id === $value){
				unset($suggestions[$key]);
				return $suggestions;
			}
		}
		
		//Default
		unset($suggestions[3]);
		return $suggestions;
		
	}

}