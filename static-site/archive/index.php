<?php
include_once ("includes/clsPage.php"); 
require_once "connection/DB.php";

$output = new Webpage();
//$comic_flag = $output->get_ComicFlag();
$title=" - Home";
$output -> DisplayTop($title, 0);


	$sql = "SELECT 
		  		comic_flag
		  		FROM iaccw_comic  
		  		WHERE start_date < NOW() and end_date > NOW()"; 
		  			
	$Result = mysql_query($sql, $connect) or die(mysql_error());
	$row = mysql_fetch_assoc($Result);
	
$output -> DisplayCenter('index','','',$row['comic_flag']);
$output -> DisplayBottom();
//$update="January, 03 2008";*/

?>