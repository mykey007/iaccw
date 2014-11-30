<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Business Center";

$output -> DisplayTop($title, 2);

$page_txt = "
			The IACCW offers the opportunity to rent an office space and/or a Conference room.<br><br>
			<b>Conference Room</b><br>
			If you need a conference room only for a few hours to organize a meeting or to display your products, 
			you can count on the IACCW even if you are not a Member. 
			For more information, please contact us at <a href='mailto:info@iaccw.net'>info@iaccw.net</a> or (310) 557-3017. (Special price for Members)<br><br>

			<b>Representative Address</b><br>
			Use of the address of the Chamber of Commerce for representative offices, branches or companies + collection of incoming correspondence.<br> 
			Cost: $ 250 per year (Fee apply for mail forwarding services)";

//$page_txt = constr();
$output -> DisplayCenter('business_center', 
										array('page_title'=>'Business Center', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/services.php', 'menu_name'=>'Services', 'high'=>0), 
												               array('url'=>'/trade_enquiry.php', 'menu_name'=>'Submit a Trade Enquiry', 'high'=>0), 
												               array('url'=>'/business_center.php', 'menu_name'=>'Business Center', 'high'=>1))),'services.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>