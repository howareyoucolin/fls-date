<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class DB{
	
	private $connection = null;
	
	public function __construct($host, $database, $username, $password){
		
		$this->connection = mysqli_connect( $host, $username, $password, $database ) or die( 'Error connecting to MySQL server.' );
		
	}
	
}