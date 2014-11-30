<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Membership";

$output -> DisplayTop($title, 2);

$page_txt = "<div align='justify'>The Italy-America Chamber of Commerce West offers a wide range of valuable services. We provide advice on business, host networking events and offer support on important issues that might affect your company.<br>
Being a member of the Chamber allows you to maximize exposure and become part of a network of highly dedicated business professionals, each striving not only for the success of their own business or organization, but also for the promotion of the trade relations between Italy and the West Coast of the United States.<br><br>
Please take a look at our <a href='docs/Membership_levels.pdf' target='_blank'>membership levels</a> to find out more about benefits of the Italy-America Chamber of Commerce West membership.<br><br><br>
<b>How To Join</b><br>
To become a member of the Italy-America Chamber of Commerce West, please download the <a href='docs/General_Member_Application.pdf' target='_blank'>membership form</a>. 
Once completed, please fax it back to (310) 557-1217, or email to <a href='mailto:info@iaccw.net'>info@iaccw.net</a>.<br><br><br>
<span class='disclaimer'>Application of new members will be evaluated and notification of acceptance will follow.</span></div>";

$output -> DisplayCenter('members', 
											array('page_title'=>'Membership', 			 
												 'page_txt'=>$page_txt,
												 'menu_voice'=>array(array('url'=>'/members.php', 'menu_name'=>'Membership', 'high'=>1), 
												               array('url'=>'/member_level.php', 'menu_name'=>'10 Top Reasons to Join', 'high'=>0), 
												               array('url'=>'/member_directory.php', 'menu_name'=>'Members Directory', 'high'=>0),
												               array('url'=>'/join.php', 'menu_name'=>'My Membership Card', 'high'=>0))),'membership.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>