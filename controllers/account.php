<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$auth = new Authorizer();

var_dump( $auth->get_login_status() );