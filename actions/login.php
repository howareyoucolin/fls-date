<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

$auth = new Authorizer();
$member_id = $auth->check_login_credential( $username, $password );

if( $member_id ){
	header( 'Location:' . SITE_URL . '/account' );
	exit(0);
}
else{
	header( 'Location:' . SITE_URL . '/login/403' );
	exit(0);
}