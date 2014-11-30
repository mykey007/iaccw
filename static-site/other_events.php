<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title="IACCW - Other";

$page_txt = "<div style='width: 600px;' align='justify'>
			 	<ul style='margin-right:5px;'>
						<li>
							<b>Saturday, October 1, 2011</b><br>
							Come to the third annual Taste of Italy! The premier cultural gastronomic event to benefit the Italian American Museum takes place on October 1st. 
							Taste of Italy features more than 15 restaurants that have earned Italy's highest culinary award, the \"Marchio Ospitalit&agrave; Italiana\".<br>
							<a href='http://italianhall.org/site/' target='_blank'>More information and ticket reservation</a>
							<br/></li><br>
				</ul>									 		
			</div>";

$page_txt = constr();

$output -> DisplayTop($title, 4);
$output -> DisplayCenter('other', 
													array('page_title'=>'Other Events', 			 
												 'page_txt'=>$page_txt,

												 'menu_voice'=>array(array('url'=>'/events.php', 'menu_name'=>'IACCW Events', 'high'=>0), 
												               array('url'=>'/other_events.php', 'menu_name'=>'Other Events', 'high'=>1))),'events.jpg');
												 
$update="January, 03 2008";
$output -> DisplayBottom();
?>