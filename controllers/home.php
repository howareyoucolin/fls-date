<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$members_factory = new Members_Factory();

echo '<pre>';
var_dump($members_factory->get_all_members());die;

//Render page.
require_once( ROOT_PATH . '/views/page-home.php' );