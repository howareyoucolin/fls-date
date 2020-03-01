<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

class Images{
	
	private $image = null;
	private $image_object = null;
	
	public function __construct($image){
		
		$this->image = $image;
		
		switch( $this->get_mime_type() ){
			
			case 'image/jpeg':
				$this->image_object = imagecreatefromjpeg( $this->image ); 
				break;
			
			case 'image/png':
				$this->image_object = imagecreatefrompng( $this->image ); 
				break;
				
			case 'image/gif':
				$this->image_object = imagecreatefromgif( $this->image ); 
				break;
				
			default:
				throw new Exception('Unexpected file type!');
				break;
		}

	}
	
	public function crop($width, $height){
		
		$dest_image = imagecreatetruecolor($width, $height);
		
		$w = $this->get_width();
		$h = $this->get_height();
		
		$type = $this->get_mime_type();

		if( $w/$width >= $h/$height ){

			imagecopyresampled(
				$dest_image, 
				$this->image_object, 
				0, 
				0, 
				($w-$h*$width/$height)/2, 
				0,
				$width, 
				$height,			
				$h*$width/$height,
				$h
			);
		}
		else{
			
			imagecopyresampled(
				$dest_image, 
				$this->image_object, 
				0, 
				0,  
				0,
				($h-$w*$height/$width)/2,
				$width, 
				$height,
				$w,
				$w*$height/$width
			);
		}
		
		switch( $type ){
			
			case 'image/jpeg':
				imagejpeg( $dest_image, $this->image );
				break;
			
			case 'image/png':
				imagepng( $dest_image, $this->image );
				break;
				
			case 'image/gif':
				$imagegif( $dest_image, $this->image );
				break;
				
			default:
				throw new Exception('Unexpected file type!');
				break;
		}
	}
	
	public function get_mime_type(){
		
		return getimagesize( $this->image )['mime'];
		
	}
	
	public function get_width(){
		
		return getimagesize( $this->image )[0];
		
	}
	
	public function get_height(){
		
		return getimagesize( $this->image )[1];
		
	}
	
}