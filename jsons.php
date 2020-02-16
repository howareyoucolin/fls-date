<?php

define('JSON_DIR', './jsons/');//Always add slash at the end.
define('POSTS_URL', 'http://api.369usa.com/posts');
define('MEMBERS_URL', 'http://api.369usa.com/members');

$posts = json_decode(file_get_contents(POSTS_URL));
$members = json_decode(file_get_contents(MEMBERS_URL));

/*** Create title-id mapping json ***/
$mappings = array();
foreach($posts as $post){
    $mappings[$post->slug] = $post->id;
}
file_put_contents(JSON_DIR.'post-mapping-title-id.json',json_encode($mappings));

/*** Create individual post json ***/
foreach($posts as $post){
    file_put_contents(JSON_DIR.'post-'.$post->id.'.json',json_encode($post));
}

/*** Create all posts json ***/
$all_posts = array();
foreach($posts as $post){
	$p = new stdClass();
	$p->title = $post->title;
	$p->excerpt = $post->excerpt;
	$p->slug = $post->slug;
	$p->post_modified = $post->post_modified;
    $all_posts[] = $p;
}
file_put_contents(JSON_DIR.'post-all.json',json_encode($all_posts));

/*** Create 5 latest posts json ***/
$recent_posts = array();
$count = 0;
foreach($posts as $post){
	if(++$count > 5) break;
	$p = new stdClass();
	$p->title = $post->title;
	$p->slug = $post->slug;
    $recent_posts[] = $p;
}
file_put_contents(JSON_DIR.'post-recent-5.json',json_encode($recent_posts));

/*** Create all members json ***/
$all_members = array();
foreach($members as $member){
	$p = clone $member;
	unset($p->content);
    $all_members[] = $p;
}
file_put_contents(JSON_DIR.'members-all.json',json_encode($all_members));

/*** Create all active members json ***/
$active_members = array();
foreach($members as $member){
	if($member->status === 'active'){
		$p = clone $member;
		unset($p->content);
		$active_members[] = $p;
	}
}
file_put_contents(JSON_DIR.'members-active.json',json_encode($active_members));

/*** Create individual member json ***/
foreach($members as $member){
    file_put_contents(JSON_DIR.'member-'.$member->id.'.json',json_encode($member));
}

echo 'OK!'.date('Y-m-d h:i:s');