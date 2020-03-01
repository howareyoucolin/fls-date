<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$image = new Images( $_FILES['file']['tmp_name'] );
$type = $image->get_mime_type();
$image = null;

switch( $type ){
	
	case 'image/jpeg':
		$extention = 'jpg';
		break;
	
	case 'image/png':
		$extention = 'png';
		break;
		
	case 'image/gif':
		$extention = 'gif';
		break;
		
	default:
		throw new Exception('Unexpected file type!');
		break;
}

$random_filename = md5( time() . rand() );  
$target_file = ROOT_PATH . '/uploads/' . $random_filename . '.' . $extention;

if( move_uploaded_file($_FILES['file']['tmp_name'], $target_file) ){
	
	$image = new Images( $target_file );
	$image->crop( 300, 300 );
	
	echo SITE_URL . '/uploads/' . $random_filename . '.' . $extention;
}

exit(0);