<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$route = new Router();

switch( $uri = $route->get_uri() ){
	
	case '':
		$route->render( 'home' );
		break;
	
	case( preg_match('/^member\/$d+$/', $uri) ):
		$route->render( 'member' );
		break;
	
	default:
		require_once( ROOT_PATH . '/controllers/404.php' );
		break;
	
}