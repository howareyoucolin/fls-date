<?php

class Member{

	public function __construct($object){
		foreach($object as $key => $value){
		    $this->{$key} = $value;
		}
	}

	public function get_age(){
		$current_year = date("Y");
		$current_month = date("m");
		$current_day = date("d");
		list($birth_year, $birth_month, $birth_day) = explode("-", $this->dob);
		if($birth_month < $current_month){
			return $current_year - $birth_year;
		}
		elseif($birth_month > $current_month){
			return $current_year - $birth_year - 1;
		}
		elseif($birth_day <= $current_day){
			return $current_year - $birth_year;
		}else{
			return $current_year - $birth_year - 1;
		}
	}

	public function get_title(){
		return $this->super_title?$this->super_title:$this->title;
	}
	
	public function get_wechat(){
		return strtolower($this->wechat);
	}
	
	public function get_intro(){
		return $this->intro?$this->intro:$this->excerpt;
	}

	public function get_url(){
		return SITE_URL.'/member/'.$this->id;
	}
	
	public function get_suggestions(){
		if($this->gender === 'm'){
			$suggestions = array(16,21,126,108);
		}else{
			$suggestions = array(94,98,111,114);
		}
		foreach($suggestions as $key => $value){
			if($this->id === $value){
				unset($suggestions[$key]);
				return $suggestions;
			}
		}
		//Default
		unset($suggestions[3]);
		return $suggestions;
	}

}