<?php
require ("includes/clsPage.php"); 
	if (isset($_POST['lname']) && isset($_POST['fname']) && isset($_POST['form_submit'])) {
		$lname = stripslashes($_POST['lname']);
		$fname = stripslashes($_POST['fname']);
		$email = $_POST['email'];
		$header = "From: IACCW Web System <info@iaccw.net>";  
		$c_name = stripslashes($_POST['c_name']);
		$address = stripslashes($_POST['address']);
		$zip = $_POST['zip'];
		$city = stripslashes($_POST['city']);
		$_POST['phone'] ? $phone = $_POST['phone']: $phone = "Not Provided";
		$_POST['fax'] ? $fax = $_POST['fax']: $fax = "Not Provided";
		$status = $_POST['status'];
		$busy = stripslashes($_POST['busy']);
		
		$mail="info@iaccw.net";

		$subject=$fname." ".$lname." sent a join request to IACCW";
		$np="<br />";
		$nl="<br>";
		$message="JOIN REQUEST SUBMITTED BY: ".$fname." ".$lname."\n\nCONTACT EMAIL: ".$email."\n\nCOMPANY NAME: ".$c_name."\n\n";
		$message.="ADDRESS: ".$address." ".$zip." ".$city."\n\n";
		$message.="PHONE: ".$phone."\n\nFAX: ".$fax."\n\nIACCW Status: ".$status."\n\nBUSINESS DESCRIPTION: ".$busy;
		if (@mail($mail, $subject, $message, $header)) {
			$content = "<span class='mail_rexp'>We have received your request correctly.</span><br><span class='mail_rexp'>One of our specialists will contact you soon, at the Email address you provided.
			</span><br><span class='mail_rexp'>We really appreciate your business.</span>";
		} else {
			$content = "<span class='mail_rexp'>Due to a connection error, your request have not been received correctly.</span><br><span class='mail_rexp'>Please, try again.
			</span><br><span class='mail_rexp'><a href='/join.php' target='_self'>How To Join</a></span>";
		}
			$output = new Webpage();
			$title=" - How To Join";
			
			$output -> DisplayTop($title, 2);
			$output -> DisplayCenter('join', 
																array('page_title'=>'How To Join', 			 
															 'page_txt'=>'To join the Italy-America Chamber of Commerce West as a member,<br>
															 							or simply to be part of our contact list, please fill out the on line application form.<br>
																						<a href="docs/Membership_form.pdf">Download the pdf membership form</a><br><br>
			
															 							<table width="600px" height="200px" border="0" align="left" cellpadding="2" cellspacing="2" class="page_table">
																						  <tr>
																						    <td valign="middle" align="left">'.$content.'</td>
																						  </tr>
																						</table>
																  					',
																						
															 'menu_voice'=>array(array('url'=>'/members.php', 'menu_name'=>'Membership', 'high'=>0), 
															               array('url'=>'/member_level.php', 'menu_name'=>'Membership Levels', 'high'=>0), 
															               array('url'=>'/join.php', 'menu_name'=>'How To Join', 'high'=>1),
															               array('url'=>'/member_directory.php', 'menu_name'=>'Members Directory', 'high'=>0))),'join.jpg');
			$update="January, 03 2008";
			$output -> DisplayBottom($update);
} else if (isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['trade_submit'])) {
		$fname = stripslashes($_POST['fname']);
		$email = $_POST['email'];
		$header = "From: IACCW Web System <info@iaccw.net>";  
		$busy = stripslashes($_POST['busy']);
		
		$mail="info@iaccw.net";

		$subject=$fname." sent a Trade Enquiry to IACCW";
		$np="<br />";
		$nl="<br>";
		$message="TRADE ENQUIRY SUBMITTED BY: ".$fname."\n\nCONTACT EMAIL: ".$email;
		$message.="\n\nCOMMENTS: ".$busy;
		if (@mail($mail, $subject, $message, $header)) {
			$content = "<span class='mail_rexp'>We have received your request correctly.</span><br><span class='mail_rexp'>One of our specialists will contact you soon, at the Email address you provided.
			</span><br><span class='mail_rexp'>We really appreciate your business.</span>";
		} else {
			$content = "<span class='mail_rexp'>Due to a connection error, your request have not been received correctly.</span><br><span class='mail_rexp'>Please, try again.
			</span><br><span class='mail_rexp'><a href='/trade_enquiry.php' target='_self'>Submit a Trade Enquiry</a></span>";
		}
			$output = new Webpage();
			$title=" - Submit a Trade Enquiry";
			
			$output -> DisplayTop($title, 3);
			$output -> DisplayCenter('trade_enquiry', 
																array('page_title'=>'Submit a Trade Enquiry', 			 
															 'page_txt'=>'Are you looking for Italian or US manufacturers, agents, distributors, wholesalers, service providers, industry associations, 
															 institutions or organizations belonging to a particular sector/industry?<br>The Chamber, through its extensive databases and appropriate sources 
															 of information, can provide you with a trade list of relevant companies which may meet your specific requirements or other tailored services.<br><br>
															 For submitting a trade enquiry, please compete the form below; one of our specialists will contact you soon.<br><br>
			
															 							<table width="600px" height="200px" border="0" align="left" cellpadding="2" cellspacing="2" class="page_table">
																						  <tr>
																						    <td valign="middle" align="left">'.$content.'</td>
																						  </tr>
																						</table>
																  					',
																						
															 					'menu_voice'=>array(array('url'=>'/services.php', 'menu_name'=>'Services', 'high'=>0), 
												               array('url'=>'/trade_enquiry.php', 'menu_name'=>'Submit a Trade Enquiry', 'high'=>1), 
																				)),'services.jpg');
			$update="January, 03 2008";
			$output -> DisplayBottom($update);
} else if (isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['contact_submit'])) {
		$fname = stripslashes($_POST['fname']);
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$header = "From: IACCW Web System <info@iaccw.net>";  
		$comments = stripslashes($_POST['comments']);
		
		$mail="info@iaccw.net";

		$subject=$fname." sent a Contact Request to IACCW";
		$np="<br />";
		$nl="<br>";
		$message="CONTACT REQUEST SUBMITTED FOR ".$contact." BY: ".$fname."\n\nCONTACT EMAIL: ".$email;
		$message.="\n\nCOMMENTS: ".$comments;
		if (@mail($mail, $subject, $message, $header)) {
			$content = "<span class='mail_rexp'>We have received your request correctly.</span><br><span class='mail_rexp'>One of our specialists will contact you soon, at the Email address you provided.
			</span><br><span class='mail_rexp'>We really appreciate your business.</span>";
		} else {
			$content = "<span class='mail_rexp'>Due to a connection error, your request have not been received correctly.</span><br><span class='mail_rexp'>Please, try again.
			</span><br><span class='mail_rexp'><a href='/trade_enquiry.php' target='_self'>Submit a Trade Enquiry</a></span>";
		}
			$output = new Webpage();
			$title=" - Contact Us";
			
			$output -> DisplayTop($title, 9);
$output -> DisplayCenter('contacts', 
													array('page_title'=>'Contact Us', 			 
												 'page_txt'=>'We aprreciate your interest in our organization!<br>
																						<table width="600px" height="100px" border="0" align="left" cellpadding="2" cellspacing="2" class="page_table">
																						  <tr>
																						    <td valign="middle" align="left">'.$content.'</td>
																						  </tr>
																						</table>																			
																			',
												 
												 'page_txt_left'=>''							
												 ),'contact_us.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
}
?>