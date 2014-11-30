<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Services";
$page_txt = "<div align='justify'>
			The IACCW offers a complete line of business services ranging from general business information to organization 
			of trade delegations, participation in international trade shows and other consulting and marketing services 
			aimed at developing business opportunities.<br>
			For our members, services are provided at a discounted rate.<br><br>
			 
  			Services include:<br>
				<ul>
				<li>Development of business partners and contacts in Italy and the United States</li>
				<li>Assistance with legal, financial and logistic aspects associated with international trade and joint ventures, both in Italy and United States</li>
				<li>Consulting services Company Research and information Access to reports and publications on statistic and economic trends</li>
				<li>Information regarding trade shows and exhibitions in Italy and US West Coast</li>
				<li>Networking opportunities</li>
				<li>Organization of business meetings, assistance in negotiations</li>
				<li>Organization of promotional activities</li>
				<li>Translation services</li>
				<li>Notification of business opportunities </li>
				<li>Business contacts</li>
				<li>Assistance to Italian companies exploring investment opportunities in the West Coast of the US</li>
				</ul>
																			
				See complete <a href='/docs/Service_Form.pdf' target='_blank'>Services and Price List</a>  
			</div>";

$output -> DisplayTop($title, 3);
$output -> DisplayCenter('services', 
													array('page_title'=>'Services', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/services.php', 'menu_name'=>'Services', 'high'=>1), 
												               array('url'=>'/trade_enquiry.php', 'menu_name'=>'Submit a Trade Enquiry', 'high'=>0), 
												               array('url'=>'/business_center.php', 'menu_name'=>'Business Center', 'high'=>0)
																				)),'services.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>