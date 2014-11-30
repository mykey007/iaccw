<?php
	require ("includes/clsPage.php"); 
//	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Trade Missions";

//$page_txt = constr();

$page_txt = "<div style='width: 600px' align='justify'>
							<ul style='margin-right:5px;'>
							  <li><b>TRADE MISSION TO VICENZA (VENETO REGION)<br>DESIGN AND FURNITURE SECTOR</b><br>
							  		<b>September 18-22, 2011</b><br>
							  		The Italy-America Chamber of Commerce West in collaboration with Vicenza Qualit&agrave; (Special Agency for the Internationalization of the Chamber of Commerce of Vicenza) 
							  		is selecting two representatives of furniture/design magazines to be invited to Vicenza 
							  		(Veneto region) to visit local furniture companies in order to promote the production of this area.<br> 
							  		For more information, please contact Lucia Peretti at 310-557-3017 or <a href='mailto:peretti@iaccw.net'>peretti@iaccw.net</a>
							  </li></br>
							  
							  <li><b>TRADE MISSION TO VENETO REGION<br>DESIGN AND FURNITURE SECTOR</b><br>
							  		<b>September 27 - October 1, 2011</b><br>
							  		The Italy-America Chamber of Commerce West in collaboration with the Centro Estero Veneto (Special Agency for the Internationalization of the Veneto territory) 
							  		is organizing a Trade mission to Veneto region dedicated to the design and furniture sector. The Objective of the trip is to promote one of the most important 
							  		business sectors of this area, and will offer an opportunity to establish new relationships with the local producers. The delegation will be composed of 6 
							  		architects and interior designers from the USA (Los Angeles and Chicago) and 6 architects and interior designers from Russia.<br>
							  		For more information, please contact Lucia Peretti at 310-557-3017 or <a href='mailto:peretti@iaccw.net'>peretti@iaccw.net</a>
							  </li></br>
							  
							</ul>
						 </div>
						";

$output -> DisplayTop($title, 5);
$output -> DisplayCenter('trade', 
													array('page_title'=>'Trade Missions', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/trade.php', 'menu_name'=>'Trade Activities', 'high'=>0), 
												               array('url'=>'/mission.php', 'menu_name'=>'Trade Missions', 'high'=>1), 
												               array('url'=>'/opportunities.php', 'menu_name'=>'Trade Shows', 'high'=>0))),'trade_activities.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>