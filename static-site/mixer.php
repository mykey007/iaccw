<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Business Mixers";



$page_txt = "
							<ul>
								<li>
									<b>Sundek</b> and <b>IACCW</b> invite you to join us in celebrating the beginning of the summer season.<br>
									For more information please call (310) 557-3017.<br>
									Event for IACCW Members and prospective members.
								<br/></li><br>	
							</ul>
						";
$page_txt = constr();

$output -> DisplayTop($title, 4);
$output -> DisplayCenter('mixers', 
													array('page_title'=>'Business Mixers', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/events.php', 'menu_name'=>'Events', 'high'=>0), 
												               array('url'=>'/mixer.php', 'menu_name'=>'Business Mixers', 'high'=>1), 
												               array('url'=>'/seminars.php', 'menu_name'=>'Seminars', 'high'=>0),
												               array('url'=>'/other.php', 'menu_name'=>'Other', 'high'=>0))),'events.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>