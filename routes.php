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
	
	case preg_match('/^signup$/', $uri) ? $uri : !$uri :
		$route->render( 'signup' );
		break;
	
	case preg_match('/^signup\/thankyou$/', $uri) ? $uri : !$uri :
		$route->render( 'signup-thankyou' );
		break;
	
	case preg_match('/^world-single-union$/', $uri) ? $uri : !$uri :
		$route->render( 'page' );
		break;
	
	case preg_match('/^profile\/update$/', $uri) ? $uri : !$uri :
		$route->render( 'profile-update' );
		break;

	case preg_match('/^login(\/\d+)?$/', $uri) ? $uri : !$uri :
		$route->render( 'login' );
		break;
		
	case preg_match('/^logout$/', $uri) ? $uri : !$uri :
		$route->render( 'logout' );
		break;

	case preg_match('/^account(\/saved)?$/', $uri) ? $uri : !$uri :
		$route->render( 'account' );
		break;

	case preg_match('/^500$/', $uri) ? $uri : !$uri :
		$route->render( '500' );
		break;

	default:
		$route->render( '404' );
		break;
	
}