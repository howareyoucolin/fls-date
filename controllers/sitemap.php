<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$post = new Post();
$members_factory = new Members_Factory();

$posts = $post->get_latest_posts();
$members = $members_factory->get_all_members();

$meta_title = '纽约婚介交友 - 网站地图';
$meta_description = '纽约婚介交友的网站地图, 地理位置, 纽约, 法拉盛. 网站主要用来帮助年轻青年男女找女朋友和找男朋友, 提高相亲的成功率, 组织美满的家庭.';
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';

//Render page.
require_once( ROOT_PATH . '/views/page-sitemap.php' );