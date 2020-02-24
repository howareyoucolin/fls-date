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


$meta_title = '纽约婚介交友 - 注册成功';
$meta_description = '纽约婚介交友免费注册会员成功,十分感谢你注册做本网站的会员, 您的资料已成功提交到我们的后台,您的资料将会出现在我们的网站的页面';
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';

//Render thank-you page if signup is completed successfully.
require_once( ROOT_PATH . '/views/page-signup-thankyou.php' );