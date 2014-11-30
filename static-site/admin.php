<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Home";

$output -> DisplayTop($title, 0);
$output -> DisplayCenter('admin',
													array('page_title'=>'Administrator Section', 			 
												 'page_txt'=>'')
												 );
$output -> DisplayBottom();
$update="January, 03 2008";
?>