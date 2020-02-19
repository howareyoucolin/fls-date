<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$route = new Router();
$uri = $route->get_uri();

switch( $uri ){
	
	case '':
		$route->render( 'home' );
		break;
	
	case preg_match('/^member\/\d+$/', $uri) ? $uri : !$uri :
		$route->render( 'member' );
		break;
	
	case preg_match('/^blog$/', $uri) ? $uri : !$uri :
		$route->render( 'blog' );
		break;
	
	case preg_match('/^blog\/.+$/', $uri) ? $uri : !$uri :
		$route->render( 'post' );
		break;
	
	case preg_match('/^sitemap$/', $uri) ? $uri : !$uri :
		$route->render( 'sitemap' );
		break;
	
	case preg_match('/^sitemap.xml$/', $uri) ? $uri : !$uri :
		$route->render( 'sitemap.xml' );
		break;
	
	case preg_match('/^world-single-union$/', $uri) ? $uri : !$uri :
		$route->render( 'page' );
		break;
	
	default:
		$route->render( '404' );
		break;
	
}