<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Our Staff";

$page_txt = "
						<div align='left' width='100%' style='margin-left: 40px;'>
						
						<b>Letizia Miccoli</b><br>
						Executive Director<br><br>
						
						<b>Genny Nevoso</b><br>
						Marketing and Communication<br><br>
						
						<b>Lucia Peretti</b><br>
						Project Manager/Event Coordinator<br><br>
					
						</div>
						<div align='left' style='margin-left: 40px;' width='100%'><br><u><b>Contact us at:</b></u><br>Phone:&nbsp;+1 (310) 557 3017<br>Email:&nbsp;<a href='mailto:info@iaccw.net'>info@iaccw.net</a></div>
";

$output -> DisplayTop($title, 1);
$output -> DisplayCenter('staff', 
													array('page_title'=>'Staff', 			 
												 'page_txt'=>$page_txt,
												 'menu_voice'=>array(array('url'=>'/about_us.php', 'menu_name'=>'About Us', 'high'=>0), 
												               array('url'=>'/board.php', 'menu_name'=>'Board Members', 'high'=>0), 
												               array('url'=>'/staff.php', 'menu_name'=>'Staff', 'high'=>1))),'about_us.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>