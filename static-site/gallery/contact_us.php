<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Contact Us";

$output -> DisplayTop($title, 9);

$page_txt = "We appreciate your interest in our organization!<br><br>
																			
												 							<div id='contact_form'>
												 								<b>Italy-America Chamber of Commerce West, Inc.</b><br>
																				10537 Santa Monica Blvd, Suite 210<br>
																				Los Angeles, CA 90025 (USA)<br>
																				<a href='mailto:info@iaccw.net'>info@iaccw.net</a><br>
																				Phone: +1 (310) 557 3017<br>Fax: +1 (310) 557 1217<br><br> 
																			</div>
																			
																			<div id='show_phoenix'>
																				<b>Italy-America Chamber of Commerce West - Phoenix Chapter</b><br>
																				10401 E. McDowell Mt Ranch Road, Suite 2310<br>
																				Scottsdale, AZ 85255-1300<br>
																				Phone: +1 (480) 735-4242<br>
																				For more information: <a href='http://www.iaccw.net/phoenix' target='_blank'>www.iaccw.net/phoenix</a><br>
																			</div>";
$output -> DisplayCenter('contacts', 
									array('page_title'=>'Contact Us', 			 
									      'page_txt'=>$page_txt,
          								  'page_txt_left'=>''							
										 ),'contact_us.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>