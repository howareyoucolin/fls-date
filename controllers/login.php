<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

//Submit action.
if( isset($_POST['submit']) ){
	require_once( ROOT_PATH . '/actions/login.php' );
	exit(0);
}


$meta_title = '纽约同城婚介交友 - 会员登陆';
$meta_description = '纽约婚介交友会员登陆,登陆后可以更改你的资料，一个良好的资料和好看的美照能让你更容易找到你心仪的男朋友或女朋友.';
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';


//Render page.
require_once( ROOT_PATH . '/views/page-login.php' );