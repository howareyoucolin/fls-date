<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$route = new Router();

//var_dump($route);die;
switch( $route->get_uri() ){
	
	case '':
		require_once( ROOT_PATH . '/controllers/index.php' );
		break;
	
	case 'x':
		if( $route->get_segment(1) ){
			$route->render( '404' );
		}
		$route->render( 'home' );
		break;
	
	default:
		require_once( ROOT_PATH . '/controllers/404.php' );
		break;
	
}