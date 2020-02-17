<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class DB{
	
	private $connection = null;
	
	public function __construct($host, $database, $username, $password){
		
		$this->connection = mysqli_connect( $host, $username, $password, $database ) or die( 'Error connecting to MySQL server.' );
		mysqli_set_charset( $this->connection, 'utf8' );
		
	}
	
	public function query($sql){
		
		return mysqli_query( $this->connection, $sql );
		
	}
	
	public function get_results($sql){
		
		$results = array();
		
		$query_result = $this->query( $sql );
		while( $object = $query_result->fetch_object() ){
            $results[] = $object;
        }
		
		return $results;
		
	}
	
	public function get_row($sql){
		
		$query_result = $this->query( $sql );
		while( $object = $query_result->fetch_object() ){
            return $object;
        }
		
		return false;
		
	}
	
	public function get_var($sql){
		
		$query_result = $this->query( $sql );
		while( $object = $query_result->fetch_object() ){
            foreach ($object as $key => $value) {
			   return $value;
		   }
        }
		
		return false;
		
	}
	
	public function get_count($sql){
		
		$query_result = $this->query( $sql );
		return $query_result ? $query_result->num_rows : null;
		
	}
	
	public function prepare($sql, ...$args){
		
		if( is_null($sql) ){
			return false;
		}
		
		foreach( $args AS $i => $arg ){
			if( $arg === null ){
				throw new Exception( 'Undefined property in arguments!' );
			}
			$sql = str_replace( "%s$i", $this->connection->real_escape_string($arg), $sql );
		}
		
		return $sql;
		
	}
	
}