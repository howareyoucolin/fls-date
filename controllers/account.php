<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$auth = new Authorizer();
$auth_status = $auth->get_login_status();

//Double check login status.
if( $auth_status == 0 ){
	header( 'Location:' .SITE_URL . '/login/500' );
	exit(0);
}
elseif( $auth_status == -1 ){
	header( 'Location:' .SITE_URL . '/login/408' );
	exit(0);
}

$member = new Member( $_SESSION['member_id'] );

$meta_title = '纽约同城交友 - 会员资料更改页面';
$meta_description = '';
$meta_keywords = '';

//Render page.
require_once( ROOT_PATH . '/views/page-account.php' );