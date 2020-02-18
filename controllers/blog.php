<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$post = new Post();

$posts = $post->get_latest_posts();

$meta_title = '纽约法拉盛婚介交友- 博客 - 纽约同城婚介交友';
$meta_description = '纽约法拉盛婚介交友博客是一个十分有知识,有深度,有文化,对广大单身男女有帮助的一个博客,无论你是在找男朋友或者找女朋友或者就一般交友都是有着十分可贵的';
$meta_keywords = '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';

//Render page.
require_once( ROOT_PATH . '/views/page-blog.php' );