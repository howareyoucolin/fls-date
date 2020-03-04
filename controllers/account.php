<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$auth = new Authorizer();
$auth_status = $auth->get_login_status();

//Double check login status.
if( $auth_status == 0 ){
	$meta_title = '纽约婚介交友 - 网页出现错误';
	$meta_description = '纽约婚介交友 - 网页出现错误.';
	//Render page.
	require_once( ROOT_PATH . '/views/page-500.php' );
	exit(1);
}
elseif( $auth_status == -1 ){
	header( 'Location:' .SITE_URL . '/login/408' );
	exit(0);
}