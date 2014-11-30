<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Trade Shows in the US";

$page_txt = constr();

$output -> DisplayTop($title, 5);
$output -> DisplayCenter('trade', 
													array('page_title'=>'Trade Shows in the US', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/trade.php', 'menu_name'=>'Trade Activities', 'high'=>0), 
												               array('url'=>'/mission.php', 'menu_name'=>'Trade Missions', 'high'=>0), 
												               array('url'=>'/opportunities.php', 'menu_name'=>'Trade Shows', 'high'=>1))),'trade_activities.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>