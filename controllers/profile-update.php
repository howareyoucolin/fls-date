<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

//Submit action.
if( isset($_FILES['file']) ){
	require_once( ROOT_PATH . '/actions/profile-update.php' );
	exit(0);
}
