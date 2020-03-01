<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

if( ! isset($_POST['submit']) ){
	die('Something is wrong!');
}

global $db;

//Organize and map the data to match with the ACF fields.
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


//Create new member row in wp_users.
//Assign the new member a temp 6 digit password.
$db->query(
	$db->prepare("
		INSERT INTO wp_posts ( post_title, post_status, post_password, post_type, post_date, post_date_gmt, post_modified, post_modified_gmt )
		VALUES ( '%s0', 'publish', '%s1', 'member', NOW(), NOW(), NOW(), NOW() )
	", $_POST['name'], rand(100000, 999999) )
);

$member_id = $db->get_last_insert_id();

//Update member meta data in wp_postmeta.
$sub_queries = array();
foreach( $data as $key => $value ){
	$sub_queries[] = $db->prepare( "( '%s0', '%s1', '%s2' )", $member_id, $key, $value );
}
$db->query("
	INSERT INTO wp_postmeta ( post_id, meta_key, meta_value ) 
	VALUES " . implode( ',', $sub_queries ) . "
");

header( 'Location:' . SITE_URL . '/signup/thankyou' );
exit(0);

