<?php
	require ("includes/clsPage.php"); 
	include_once("underconstruction.php");

$output = new Webpage();
$title=" - Membership";

$output -> DisplayTop($title, 2);

$page_txt = "
			<b>Preferential rates for services and activities</b>
			<div class='indented_div'>IACCW Members benefit from preferential rates for <a href='/docs/Service_Form.pdf' target='_blank'>services and activities</a></div>
			
			<b>Referral Services</b>
			<div class='indented_div'>The Chamber receives many enquiries requesting referrals for information on legal, accounting, banking, travel, real estate, business opportunities and other services. 
			The IACCW answers all those enquiries by referring its members in the appropriate sector.</div>
			
			<b>Business Exposure</b>
			<div class='indented_div'>The IACCW provides opportunities to promote your company to potential customers and business professionals:
			<ul style='margin-left:15px'>
				<li>Permanent logo in our website</li>
				<li>Possibility to be featured on <a href='http://www.italplanet.it/interna.asp?sez=417&ln=0' target='_blank'>e'Italia</a>, 
				the Magazine of the Italian Chambers of Commerce in the World</li>
				<li>Opportunity to publish business related information on the website under <em><a href='/follow_our_members.php'>Follow our Members</a></em></li>
				<li>Listing on the IACCW online <a href='/member_directory.php'>membership directory</a></li>
				<li>Possibility to be included in our quarterly newsletter to advertise and promote your company</li>
				<li>Advertise business events through the IACCW list of business contacts</li>
			</ul>
			</div>
			
			<b>Membership Directory</b>
			<div class='indented_div'>Once a year, the IACCW publishes online Members Directory containing members' business information and opportunity for discounted rates on services. 
			The directory is published once a year and is updated monthly.</div>
			
			<b>My Membership Card</b>
			<div class='indented_div'>As a member of the Chamber you receive a <a href='http://www.assocamerestero.it/Members/member.asp' target='_blank'>membership card</a> 
			that allows you to access a wide range of services at hotels, restaurants, car rentals, etc. at special prices in USA and in other 49 
			countries where Chambers are present. IACCW members are encouraged to offer privileged pricing, exclusive discounts and other value-added 
			benefits to their local and international fellow members with the goal of fostering business relationships among worldwide members.</div>
			
			<b>Internship Service</b>
			<div class='indented_div'>In collaboration with the Italian Universities, the IACCW offers its Members the opportunity to host Italian students as interns in their company. 
			The internship programs are at no cost for the companies. If interested, please email us at <a href='mailto:info@iaccw.net'>info@iaccw.net</a> for more information.</div>
			
			<b>Networking events</b>
			<div class='indented_div'>The IACCW provides great opportunities to get to know new people and expand your business network. 
			Business Mixers, Wine tastings, seminars on economy related topics, are just a few examples of events that the Chamber 
			organizes to help our members build new business relationships and generate new business opportunities. 
			Thanks to the generosity of our sponsors, we are able to organize discounted events for our members. 
			In addition to the general networking events, the IACCW hosts industry-only events open to professionals 
			and members of the related industry.</div>
			
			<b>IACCW Annual Events</b>
			<div class='indented_div'>Discounted rates and priority invitation to IACCW annual events: 
			<ul style='margin-left:15px'>
				<li>Annual General Meeting (January)</li>
				<li>Membership Orientation (February)</li>
				<li>Viva Vino L.A. (May)</li>
				<li>L.A. Mixer and Networking (September)</li>
				<li>IACCW Gala Dinner (December)</li>
				<li>International Golf Tournament (starting March 2012)</li>
			</ul></div>
			
			<b>Trade Missions</b>
			<div class='indented_div'>The IACCW organizes trade missions to and from Italy in various industry sectors. Members of the Chamber have priority to participate in trade missions.</div>
			
			<b>Business Centre</b>
			<div class='indented_div'>The IACCW offers the opportunity to rent an office space and/or a <a href='/business_center.php'>Conference room</a>. Members receive special rates. For more information, please email us at info@iaccw.net or call (310) 557-3017</div>
			
			<a href='/docs/10_top_reasons_to_join_IACCW.pdf' target='_blank'>Print out this page in PDF</a>
			
";

//$page_txt = constr();
$output -> DisplayCenter('member_level', 
													array('page_title'=>'10 Top Reasons to Join', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/members.php', 'menu_name'=>'Membership', 'high'=>0), 
												               array('url'=>'/member_level.php', 'menu_name'=>'10 Top Reasons to Join', 'high'=>1), 
												               array('url'=>'/member_directory.php', 'menu_name'=>'Members Directory', 'high'=>0),
												               array('url'=>'/join.php', 'menu_name'=>'My Membership Card', 'high'=>0))),'membership.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>