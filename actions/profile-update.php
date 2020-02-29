<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$random_filename = md5( time() . rand() );  
$target_file = ROOT_PATH . '/uploads/' . $random_filename . '.jpg';

if( move_uploaded_file($_FILES['file']['tmp_name'], $target_file) ){
	echo SITE_URL . '/uploads/' . $random_filename . '.jpg';
}