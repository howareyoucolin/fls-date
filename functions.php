<?php

define('SITE_PATH',dirname(__FILE__));
if(!defined('SITE_URL')) define('SITE_URL','https://www.flushingdating.com');

include_once(SITE_PATH.'/class/member.php');

function get_json($filename){
	$json = dirname(__FILE__).'/jsons/'.$filename.'.json';
	$data = json_decode(file_get_contents($json));
	return $data;
}

function redirect_404(){
	header('Location:https://www.flushingdating.com/404');
	exit(0);
}