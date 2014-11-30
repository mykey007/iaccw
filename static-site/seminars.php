<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Seminars";

$page_txt = constr();

$output -> DisplayTop($title, 4);
$output -> DisplayCenter('seminars', 
													array('page_title'=>'Seminars', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/events.php', 'menu_name'=>'Events', 'high'=>0), 
												               array('url'=>'/mixer.php', 'menu_name'=>'Business Mixers', 'high'=>0), 
												               array('url'=>'/seminars.php', 'menu_name'=>'Seminars', 'high'=>1),
												               array('url'=>'/other.php', 'menu_name'=>'Other', 'high'=>0))),'events.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>