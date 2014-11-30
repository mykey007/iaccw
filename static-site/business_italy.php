<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Business Opportunities from Italy";

$page_txt = constr();

$output -> DisplayTop($title,5);
$output -> DisplayCenter('business_ita', 
													array('page_title'=>'Business Opportunities from Italy', 			 
												 'page_txt'=>$page_txt,'trade_activities.jpg',
												 'menu_voice'=>array(array('url'=>'/trade.php', 'menu_name'=>'Trade Activities', 'high'=>1), 
												               array('url'=>'/mission.php', 'menu_name'=>'Trade Missions', 'high'=>0), 
												               array('url'=>'/opportunities.php', 'menu_name'=>'Trade Shows', 'high'=>0))),'trade_activities.jpg');
												 
$update="January, 03 2008";
$output -> DisplayBottom();
?>