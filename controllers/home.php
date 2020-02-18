<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$meta_title = '纽约同城婚介交友 - 找男朋友找女朋友';
$meta_description = '纽约有什么好的婚介交友? 你在相亲,找男朋友吗? 理工男在找女朋友. 18岁与家人一起移民来美国, 在纽约法拉盛住了差不多十多年. 广交友, 性格好.';
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';

$members_factory = new Members_Factory();
$members = $members_factory->get_all_members();

//Render page.
require_once( ROOT_PATH . '/views/page-home.php' );