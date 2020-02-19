<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$route = new Router();
$post = new Post();

$slug = $route->get_segment( 0 );
$p = $post->get_post_by_slug( $slug );
$id = $p->ID;
$meta = $post->get_postmeta_by_id( $id );

$p->page_title = $meta->title ? $meta->title : $p->post_title;

$meta_title = '纽约同城婚介交友 - ' . $p->page_title;
$meta_description = $meta->description ? $meta->description : $p->excerpt;
$meta_keywords = $meta->keywords ? $meta->keywords : '纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友';



//Render page.
require_once( ROOT_PATH . '/views/page-page.php' );