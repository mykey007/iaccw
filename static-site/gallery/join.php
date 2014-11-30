<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - My Membership Card";

$output -> DisplayTop($title, 2);
$page_txt = "The Advantages of your Membership Card<br><br>
				As a member of the Chamber, every year you receive a membership card that allows you to access a wide range of services at hotels, 
				restaurants, car rentals, etc. at special prices in USA and in other 49 countries where Chambers are present.
				<b>IACCW members are encouraged to offer <u>privileged pricing, exclusive discounts and other value-added benefits</u> to their local and international 
				fellow members with the goal of fostering business relationships among worldwide members.</b><br>
				In order to take advantage of the Membership Card's benefits, please make sure to enroll by entering the website 
				<a href='http://www.assocamerestero.it' target='_blank'>www.assocamerestero.it</a>, click on \"Members' Area\" and follow the registration process.<br><br>
				Please contact Lucia Peretti at (310) 691-8904 for further information or assistance.
				</b>";

$output -> DisplayCenter('join', 
													array('page_title'=>'My Membership Card', 			 
												 'page_txt'=>$page_txt,

												 'menu_voice'=>array(array('url'=>'/members.php', 'menu_name'=>'Membership', 'high'=>0), 
												               array('url'=>'/member_level.php', 'menu_name'=>'10 Top Reasons to Join', 'high'=>0), 
												               array('url'=>'/member_directory.php', 'menu_name'=>'Members Directory', 'high'=>0),
												               array('url'=>'/join.php', 'menu_name'=>'My Membership Card', 'high'=>1))),'join.jpg');
												               
												 
$update="January, 03 2008";
$output -> DisplayBottom();
?>