<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );


global $db;

$member_id = $_SESSION['member_id'];
$member = new Member( $member_id );


$data = array();
$data['dob'] = $_POST['birth_year'] . str_pad($_POST['birth_month'], 2, '0', STR_PAD_LEFT) . str_pad($_POST['birth_day'], 2, '0', STR_PAD_LEFT);
$data['email'] = $_POST['email'];
$data['gender'] = $_POST['gender'];
$data['profile_image'] = $_POST['profile_image'];
$data['about_me'] = $_POST['about_me'];
$data['preference'] = $_POST['preference'];
$data['phone'] = $_POST['phone'];
$data['super_title'] = $_POST['super_title'];
$data['wechat'] = $_POST['wechat'];


//Update post_title field in posts table.
$db->query(
	$db->prepare("
		UPDATE wp_posts SET post_title = '%s1' WHERE ID = '%s0'
		", $member_id, trim($_POST['name']) )
);

//Update post meta row 1 by 1.
foreach( $data as $key => $value ){
	$has_meta = $db->get_var(
		$db->prepare("
			SELECT EXISTS(
				SELECT * FROM wp_postmeta WHERE post_id = '%s0' AND meta_key = '%s1'
			)", $member_id, $key )
	);
	if( $has_meta ){
		$db->query(
			$db->prepare("
				UPDATE wp_postmeta SET meta_value = '%s2' WHERE post_id = '%s0' AND meta_key = '%s1'
				", $member_id, $key, trim($value) )
		);
	}
	else{
		$db->query(
			$db->prepare("
				INSERT INTO wp_postmeta ( post_id, meta_key, meta_value ) 
				VALUES ( '%s0', '%s1', '%s2' )
				", $member_id, $key, trim($value) )
		);
	}
}


header( 'Location:' . SITE_URL . '/account/saved' );
exit(0);