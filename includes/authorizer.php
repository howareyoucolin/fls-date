<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class Authorizer{
	
	public function check_login_credential($username, $password){
		
		global $db;
		
		$member_id = $db->get_var(
			$db->prepare("
				SELECT A.post_id FROM
					(SELECT * FROM 
					wp_postmeta 
					WHERE meta_value = '%s0' AND meta_key = 'password') AS A
				JOIN
					(SELECT * FROM 
					wp_postmeta 
					WHERE 
						(meta_value = '%s1' AND meta_key = 'email') OR
						(meta_value = '%s1' AND meta_key = 'wechat') OR
						(meta_value = '%s1' AND meta_key = 'phone')
					) AS B
				ON A.post_id = B.post_id
				LIMIT 1", md5($password), $username )
		);
		
		if( $member_id ){
			
			$_SESSION['password'] = md5( $password );
			$_SESSION['member_id'] = $member_id;
			$_SESSION['expire'] = time() + 3600;
			
			return $member_id;
		}
		
		return false;
		
	}
	
	/**
	* 1 means logged in;
	* 0 means not logged in;
	* -1 means expired, time out.
	**/
	public function get_login_status(){
		
		if( !isset($_SESSION['password']) || !isset($_SESSION['member_id']) || !isset($_SESSION['expire']) ){
			return 0;
		}
		
		if( $_SESSION['expire'] < time() ){
			return -1;
		}
		
		if( $this->is_authorized($_SESSION['member_id'], $_SESSION['password']) ){
			return 1;
		}
		
		return 0;
		
	}

	public function is_authorized($id, $password){

		global $db;

		return $db->get_var(
			$db->prepare("
				SELECT EXISTS(
					SELECT * FROM 
					wp_postmeta
					WHERE post_id = '%s0' AND (meta_key = 'password' OR meta_key = 'backup_password') AND meta_value = '%s1'
				)", $id, $password )
		);

	}
	
	public function unset_login_sessions(){
		
		if( isset($_SESSION['password']) ){
			unset( $_SESSION['password'] );
		}
		
		if( isset($_SESSION['member_id']) ){
			unset( $_SESSION['member_id'] );
		}
		
		if( isset($_SESSION['expire']) ){
			unset( $_SESSION['expire'] );
		}
		
	}
	
}