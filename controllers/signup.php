<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

//Submit action.
if( isset($_POST['submit']) ){
	require_once( ROOT_PATH . '/actions/signup.php' );
	exit(0);
}

$route = new Router();


$meta_title = '纽约同城婚介交友 - 免费注册会员';
$meta_description = '纽约婚介交友免费注册会员, 注册过程仅花2-3分钟,如果你在寻求介友,找男朋友,找女朋友,强烈建议你马上注册一个免费的会员,名额有限,时间有限.';
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';



//Render page.
require_once( ROOT_PATH . '/views/page-signup.php' );