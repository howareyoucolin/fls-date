<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

$auth = new Authorizer();
$auth_status = $auth->unset_login_sessions();

//202 means accepted.
header( 'Location:' .SITE_URL . '/login/202' );
exit(0);