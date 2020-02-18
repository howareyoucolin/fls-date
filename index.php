<?php
 
define( 'VERSION', '1.0.1' );
define( 'ROOT_PATH', dirname(__FILE__) );

require_once( ROOT_PATH . '/config.php' );

if( DEBUG ){
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
else{
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(0);
}

//Include classes.
require_once( ROOT_PATH . '/includes/router.php' );
require_once( ROOT_PATH . '/includes/db.php' );

require_once( ROOT_PATH . '/includes/members_factory.php' );
require_once( ROOT_PATH . '/includes/member.php' );
require_once( ROOT_PATH . '/includes/post.php' );

//Init DB.
$db = new DB( DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD );

//Define routes.
require_once( ROOT_PATH . '/routes.php' );

exit(0);
 
	