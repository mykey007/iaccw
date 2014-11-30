<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Submit a trade Enquiry";

$output -> DisplayTop($title, 3);
$output -> DisplayCenter('trade_enquiry', 
													array('page_title'=>'Submit a Trade Enquiry', 			 
												 'page_txt'=>'
												 <div style=\'margin-right: 15px;text-align:justify\'>
												 Are you looking for Italian or US manufacturers, agents, distributors, wholesalers, service providers, industry associations, 
												 institutions or organizations belonging to a particular sector/industry?<br><br>The Chamber, through its extensive databases and sources of information, can 
												 provide you with a full list of relevant companies which may meet your specific requirements or other tailored services.<br><br>
												 To submit a trade enquiry, please complete the form below.<br><br>
												 
												 <form id="join" name="trade_form" action="/mail.php" method="post">
																			<table width="550px" border="0" align="left" cellpadding="2" cellspacing="2" class="page_table">
																			  <tr>
																			    <td width="180px" valign="top" align="right">Full Name: *&nbsp;</td>
																			    <td><input type="text" size="50" value="" name="fname"  id="fname"></td>
																			  </tr>
																			  <tr>
																			    <td  valign="top" align="right">Email: *&nbsp;</td>
																			    <td><input type="text" size="50" value="" name="email"  id="email"></td>
																			  </tr>
																			  <tr>
																			    <td  valign="top" align="right">Request: *&nbsp;</td>
																			    <td><textarea name="busy" cols="50" rows="10" id="busy" style=" vertical-align:text-top"></textarea></td>
																			  </tr>
																			  <tr>
																			    <td colspan="2" align="right"><input type="submit" value="Submit" id="trade_submit" name="trade_submit" onClick="return email_trade()">&nbsp;&nbsp;<input type="button" value="Cancel" onClick="trade_delete()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*: Required Information</td>
																			  </tr>
																			</table>
																			
																			</form>
													</div>',
																			
												 'menu_voice'=>array(array('url'=>'/services.php', 'menu_name'=>'Services', 'high'=>0), 
												               array('url'=>'/trade_enquiry.php', 'menu_name'=>'Submit a Trade Enquiry', 'high'=>1),
												               array('url'=>'/business_center.php', 'menu_name'=>'Business Center', 'high'=>0) 
																				)),'services.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();?>