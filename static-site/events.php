<?php
	require ("includes/clsPage.php"); 

$output = new Webpage();
$title=" - Events";

$output -> DisplayTop($title, 4);
$page_txt = "
The Chamber organizes networking events and functions in order to bring members together and assist them in maximizing the opportunity to establish useful contacts. To best take advantage of your membership, we encourage you to participate in the Chambers� events and activities.<br><br>
The range of events includes business mixers, dinners, seminars and much more!<br><br>
Event sponsorships and promotional opportunities are available.<br>
Please contact the Chamber at <a href='mailto:peretti@iaccw.net'>peretti@iaccw.net</a>.<br>
To propose an event to be organized by the Chamber, contact <a href='mailto:peretti@iaccw.net'>peretti@iaccw.net</a>.<br><br>

    <ul>
	<li class='li_div'>
		<b>VINO CALIFORNIA<br>
		Los Angeles, Wednesday May 14, 2014</b><br>
		The annual festival of Italian wine is returning to Los Angeles!<br>
		For more information please visit <a href='http://www.vino-california.com' target='_blank'>www.vino-california.com</a>
	</li>
    </ul>

";

$output -> DisplayCenter('events', 
													array('page_title'=>'Events', 			 
												 'page_txt'=>$page_txt,
																			
												 'menu_voice'=>array(array('url'=>'/events.php', 'menu_name'=>'IACCW Events', 'high'=>1), 
												               array('url'=>'/other_events.php', 'menu_name'=>'Other Events', 'high'=>0))),'events.jpg');
$update="January, 03 2008";
$output -> DisplayBottom();
?>