<?php
require ("includes/clsPage.php"); 

$output = new Webpage();
$query_type = $_GET['query_type']; 

if ($query_type == 'videos') {
	if (!$_GET['content_type']) {
		return FALSE;		
	} 
	require_once "connection/DB.php";
	$videos = $output->get_media_VideoContent((int)$_GET['content_type']);
	echo $videos;
	//die;
} else {
	if (!is_numeric($_GET['p_page'])) {
		return false;
	} else {
		$params = array('what_to_get'=>(int)$_GET['wtg'], 't_album'=>$_GET['album'], 'p_page'=>$_GET['p_page']);
		$albums = $output->get_mediaPicts($params);
		//echo $albums;die;
		echo $albums;
	}
}
?>