<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$route = new Router();
$id = $route->get_segment( 1 );

$member = new Member( $id );

if( ! $member->exists() ){
	$route->render( '404' );
	exit( 0 );
}

$meta_title = '纽约同城婚介交友 - ' . $member->get_super_title();
$meta_description = $member->get_intro();
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';

//Render page.
if( $member->is_active() ){
	require_once( ROOT_PATH . '/views/page-member.php' );
}
else{
	require_once( ROOT_PATH . '/views/page-member-inactive.php' );
}