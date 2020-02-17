<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class Router{
	
	private $uri = null;
	private $segments = null;
	private $page = null;
	
	public function __construct(){
		
		$this->uri = trim( isset($_GET['uri']) ? $_GET['uri'] : '' );
		$this->url = rtrim( SITE_URL . '/' . $this->uri, '/' );
		
		//Remove trailing slash for SEO purposes.
		if( substr($this->uri, -1) === '/' ){
			header( 'Location:' . $this->url );
			exit(0);
		}
		
		$this->segments = explode( '/', $this->uri );
		
	}
	
	public function get_uri(){
		
		return $this->uri;
		
	}
	
	public function get_segment($n){
		
		return isset($this->segments[$n]) ? $this->segments[$n] : false;
		
	}
	
	public function render($page){
		
		require_once( ROOT_PATH . '/controllers/' . $page . '.php' );
		
	}
	
}